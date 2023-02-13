<template>
  <div>
    <main class="main mt-2">
      <nav aria-label="breadcrumb" class="d-none d-lg-block">
        <ol class="breadcrumb bg-transparent justify-content-end p-0">
          <li class="breadcrumb-item text-capitalize">commande</li>
          <li class="breadcrumb-item text-capitalize active" aria-current="page">
            <router-link :to="'/commandes'">Liste des commandes</router-link></li>
        </ol>
      </nav>
    </main>

    <div class="container-fluid animated fadeIn">
      <div class="row">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      token: ""
    };
  },
  computed: {
    options() {
      return this.$store.state.options;
    }
  }
};
</script>
