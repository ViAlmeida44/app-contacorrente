<template>
    <div class="navbar">
        <h4 class="titulo"><i class="fa  fa-credit-card"></i>&nbsp; Aplicação de Conta Corrente</h4>
        <a href="" @click.prevent="logout" class="logout">Sair &nbsp;<i class="fa fa-sign-out-alt"></i></a>
    </div>
</template>

<script>
export default {
    
    name: 'NavbarComponent',

    methods: {
        logout() {
            this.$router.push({name: 'login'})
        }
    }

}
</script>
 
<style lang="scss">

.navbar{

    .titulo {
        color: white;
    }

    .logout {
        color: white;
    }

}

</style>