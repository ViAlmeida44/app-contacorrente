<template>
    <div class="pages">
        <h5>Bem-vindo(a)</h5>

        <div class="saldo">
            <h5>Saldo disponível: </h5>
        </div>

        <br><br>

        <div class="row">
            <div class="card">
                <!-- <h5><router-link :to="{name: 'sacar'}">Sacar</router-link></h5> -->
                <a href=""><h5>Sacar</h5></a>
            </div>

            <div class="card">
                <!-- <h5><router-link :to="{name: 'depositar'}">Depositar</router-link></h5> -->
                <a href=""><h5>Depositar</h5></a>
            </div>
        </div>



    </div>
</template>

<script>
export default {
    
    /* name: 'InicioComponent',

    methods: {
        logout() {
            this.$router.push({name: 'login'})
        }
    }
 */
}
</script>
 
<style lang="scss">

.pages {
    padding: 2%;
}

.card {
    display: flex;
    flex-direction: column;
    width: 170px;
    height: 70px;
    text-align: center;
    padding-top: 20px;
    // background-color: #79d1a4;

    h5 {
        color: #79d1a4;
    }


}

</style>