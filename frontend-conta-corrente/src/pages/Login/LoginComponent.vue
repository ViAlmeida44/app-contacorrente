<template>
    <div class="main">
        <div class="login">
            <div class="content-login">

                <header>
                    <h1>Acesso a Conta-Corrente</h1>
                </header>
                <br><br><br>
                <div class="form">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Usuário</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" @click.prevent="login">Entrar</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
export default {
    
    name: 'LoginComponent',

    data() {
        return {

        }
    },
    methods: {
        login() {
            this.$router.push({name: 'home'});
        }
    }
    
}
</script>

<style lang="scss" src="./style.scss" scoped/>