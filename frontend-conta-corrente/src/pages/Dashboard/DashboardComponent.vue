<template>
    <div class="main">
        <div class="content">
            <NavbarComponent/>

            <InicioComponent/>
        </div>

    </div>
</template>

<script>
import NavbarComponent from './components/NavbarComponent';
import InicioComponent from './components/InicioComponent';

export default {
    
    name: 'DashboardComponent',

    components: {
        NavbarComponent,
        InicioComponent
    }

}
</script>
 
<style lang="scss" src="./style.scss" scoped/>