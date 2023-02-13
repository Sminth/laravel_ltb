<template>
  <div class="col-12">
    <el-card class="bg-white">
      <div class="row">
        <div class="col-md-6 text-left">
          <h1 class="text-primary">Commande</h1>
          <small class="text-black-50">Numero de la commande #h {{ order.id }}</small>
        </div>
        <div class="col-md-6">
          <div class="d-flex justify-content-end pb-3 pl-2">
            <el-dropdown>
              <el-button type="primary" icon="el-icon-more">
                Actions<i class="el-icon-arrow-down el-icon--right"></i>
              </el-button>
              <el-dropdown-menu slot="dropdown">
                <el-dropdown-item icon="el-icon-delete" type="primary"
                                  :disabled="order.status == 2"
                                  @click.native="annulerCommande">annuler la commande
                </el-dropdown-item>
                <el-dropdown-item icon="el-icon-circle-plus-outline" :disabled="order.status === 1"
                                  @click.native="accepterCommande">
                  Accepter la commande
                </el-dropdown-item>
              </el-dropdown-menu>
            </el-dropdown>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 text-left">
          <h4>Client</h4>
          <div v-if="order.client">
            {{ order.client.nom }} {{ order.client.prenom }}<br>
            {{ order.client.email }}<br>
            {{ order.client.telephone }}<br>
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
              <!-- <th>Boutique</th> -->
              <th>produit</th>

              <th>quantité</th>
              <th>prix de vente</th>
              <th>total</th>
            </tr>
            <tr v-for="detail in order.detail">
              <td>{{ detail.id }}</td>
              <!-- <td>{{ detail.produits.owner.name }}</td> -->
              <td>{{ detail.produits.nom }}</td>

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
      'CHANGE_STATUS',
      'RESET_COMMANDE'
    ]),
    async loadOrder() {
      const res = await this.FETCH_COMMANDE({
        id: this.$route.params.id
      })
      if (res) {
        this.order = res;
      }
    },
    async annulerCommande() {
      window.swal({
        title: 'suppresion de la commande',
        text: 'Êtes-vous sure de vouloir supprimer cette commande ?',
        buttons: true,
        dangerMode: true
      }).then(async (value) => {
        if (value) {
          const filter = {
            id: this.$route.params.id,
            status: 2
          }
          const response = await this.CHANGE_STATUS(filter)
          if (response.status === 200) {
            this.$message.success("commande annulée")
            this.$router.go(-1)
          } else {
            this.$message.error("une erreur est survenue pendant la suppression effectuée.")
          }
        }
      })
    },
    async accepterCommande() {
      window.swal({
        title: 'Validation de la commande',
        text: 'Êtes-vous sure de vouloir accepter cette commande ?',
        buttons: true,
        dangerMode: true
      }).then(async (value) => {
        if (value) {
          const filter = {
            id: this.$route.params.id,
            status: 1
          }
          const response = await this.CHANGE_STATUS(filter)
          if (response.status === 200) {
            window.swal({
              icon: 'success',
              title: 'operation terminée',
              text: "commande accepté avec succès ."
            })
            await this.RESET_COMMANDE()
            await this.loadOrder()
            this.$router.go(-1)
          } else {
            this.$message.error("une erreur est survenue pendant l'operation.")
          }
        }
      })
    }
  }
}
</script>
