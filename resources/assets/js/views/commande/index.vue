<template>
  <el-card style="width: 100%">
    <div slot="header">
      <el-row type="flex" justify="space-between">
        <span class="mr-2">Status de la commande</span>
        <el-select v-model="status_commande">
          <el-option label="tout" value="null">
          </el-option>
          <el-option label="nouvelle commande" value="0">
          </el-option>
          <el-option label="commande confirmée" value="1">
          </el-option>
          <el-option label="commande annulée" value="2">
          </el-option>
        </el-select>
      </el-row>
    </div>
    <div class="mt-2">
      <div class="row">
        <div class="col-sm-12">
          <el-table ref="table" v-loading="isRequestOngoing" :data="commandes" stripe border fit
                    style="width: 100%">

            <el-table-column align="left" label="#ID" width="50">
              <template slot-scope="scope">
                <span v-if="scope.row.id">{{ scope.row.id }}</span>
              </template>
            </el-table-column>

            <el-table-column align="left" label="client" min-width="80">
              <template slot-scope="scope">
                <span>{{ scope.row.client.nom + ' ' + scope.row.client.prenom }}</span>
              </template>
            </el-table-column>

            <el-table-column align="left" label="téléphone">
              <template slot-scope="scope">
                <span>{{ scope.row.client.telephone }}</span>
              </template>
            </el-table-column>

            <el-table-column align="left" label="adresse">
              <template slot-scope="scope">
                <span>{{ scope.row.adresse.commune.nom + ' ' + scope.row.adresse.description }}</span>
              </template>
            </el-table-column>

            <el-table-column align="left" label="Date">
              <template slot-scope="scope">
                <span>{{ scope.row.created_at | formatDate }}</span>
              </template>
            </el-table-column>

            <el-table-column class-name="status-col" label="status de la commande" width="200">
              <template slot-scope="{row}">
                <el-tag v-if="parseInt(row.status) === 0" type="primary">en attente</el-tag>
                <el-tag v-else-if="parseInt(row.status) === 1" type="success">commande confirmée</el-tag>
                <el-tag v-else type="danger">commande annulée</el-tag>
              </template>
            </el-table-column>


            <el-table-column align="center" width="150">
              <template slot-scope="scope">
                <router-link :to="'commandes/'+scope.row.id+'/'">
                  <el-button type="primary" size="small" icon="el-icon-edit">
                    voir les details
                  </el-button>
                </router-link>
              </template>
            </el-table-column>


          </el-table>
        </div>
      </div>
      <el-divider></el-divider>
      <div class="row mt-2 mb-2">
        <el-pagination
            background
            @size-change="handleCurrentChange"
            :current-page="current_page"
            @current-change="handleCurrentChange"
            layout="prev, pager, next"
            :total="total"
        >
        </el-pagination>
      </div>
      <el-divider></el-divider>
    </div>
  </el-card>
</template>

<script>
import {mapActions, mapState} from 'vuex'

export default {
  name: 'UtilisateurIndex',
  data() {
    return {
      isRequestOngoing: false,
      current_page: 1,
      status_commande: 'null'
    }
  },
  watch: {
    status_commande: function (value) {
      this.status_commande = value
      this.current_page = 1
      this.fetchData()
    }
  },
  created() {
    this.fetchData()
  },
  computed: {
    ...mapState('Commande', ['commandes', 'total'])
  },
  methods: {
    ...mapActions('Commande', [
      'FETCH_COMMANDES'
    ]),
    async fetchData() {
      this.isRequestOngoing = true
      const data_filters = {
        status: this.status_commande,
        page: this.current_page,
      }
      await this.FETCH_COMMANDES(data_filters)
      this.isRequestOngoing = false
    },
    handleCurrentChange(val) {
      this.current_page = val;
      this.fetchData()
    }
  }
}
</script>
