<template>
  <div class="col-md-12">
    <el-card class="bg-white">
      <div class="row">
        <div class="col-md-6 text-left">
          <h1 class="text-primary">Commande</h1>
          <small class="text-black-50">Numero de la commande # {{ order.id }}</small>
        </div>
        <div class="col-md-6">
          <div class="d-flex justify-content-end pb-3 pl-2">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 text-left">
          <h4>Client</h4>
          <div v-if="order.client">
            {{ order.client.nom }} {{ order.client.prenom }}<br>
            <template v-if="order.adresse">
              <b>Commune </b> {{ order.adresse.commune.nom || 'non definie' }}<br>
              <b> </b>Adresse de Livraison : {{ order.adresse.description || 'non definie' }}<br>
            </template>
          </div>
        </div>
        <div class="col-md-6  text-right">
          <h5>
            status de la commande
          </h5>
          <h3 class="text-success" v-if="order.status === 1"><i
              class="el-icon-success"></i>confirmé</h3>
          <h3 class="text-primary" v-if="order.status === 0"><i
              class="el-icon-loading"></i>en attente</h3>
          <h3 class="text-danger" v-if="order.status ===2"><i
              class="el-icon-error"></i>annulée</h3>
        </div>
      </div>

      <div class="row  bg-white mt-5">
        <div class="col-12">
          <table class="table table-bordered w-100">
            <tr>
              <th>ID</th>
              <th>Boutique</th>
              <th>produit</th>
              <th>couleur</th>
              <th>taille</th>
              <th>quantité</th>
              <th>prix de vente</th>
              <th>total</th>
            </tr>
            <tr v-for="detail in order.detail">
              <td>{{ detail.id }}</td>
              <td>{{ detail.produits.owner.name }}</td>
              <td>{{ detail.produits.code + '-' + detail.produits.nom }}</td>
              <td>{{ detail.couleur.nom }}</td>
              <td>{{ detail.taille.nom }}</td>
              <td>{{ detail.quantite }}</td>
              <td>{{ detail.prix_vente | currency }}</td>
              <td>{{ (detail.quantite * detail.prix_vente) | currency }}</td>
            </tr>
          </table>
        </div>
      </div>
    </el-card>
  </div>
</template>
<script>
import {mapActions} from 'vuex'

export default {
  name: 'OrderShow',
  data() {
    return {
      order: {},
      IsLoading: false,
      EstLoading: false,
    }
  },
  created() {
    this.IsLoading = true
    this.loadOrder()
    this.IsLoading = false
  },
  watch: {
    '$route': 'loadOrder',
  },
  methods: {
    ...mapActions('Commande', [
      'FETCH_COMMANDE',
    ]),
    async loadOrder() {
      const res = await this.FETCH_COMMANDE({
        id: this.$route.params.id
      })
      if (res) {
        this.order = res;
      }
    }
  }
}
</script>
