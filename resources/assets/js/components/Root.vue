<template>
  <div class="container" style="height: 100%; background-color: #aaa">
    <div class="row h100" style="height: 100%; background-image: url('http://ak4.picdn.net/shutterstock/videos/8962384/thumb/1.jpg'); background-position: center; background-repeat: no-repeat;">
      <div class="col col-lg-8 offset-md-2 text-center ">
    
           <div class="row h-100 justify-content-center align-items-center">        
              <button type="button" class="btn btn-primary" @click="previousStep()" style="margin-right: 10px">Anterior</button>

              <full-frame v-if="step==i" v-for="(user,i) in users"  :user="user"   v-bind:key="user.id" text="">

              </full-frame>

              <button type="button" class="btn btn-primary" style="margin-left: 10px" @click="nextStep()">Siguiente</button>
            </div>
          </div>
        </div>  
    </div>
  </div>
</template>

<script>
  import FullFrame from './landing/FullFrame.vue';

  export default {

    components: {
      'full-frame': FullFrame
    },
    props : ['users'],
    data () {
      return {
        step: 0,
      }
    },
    mounted() {
      console.log('Component mounted.')
   
    },
    methods: {
      nextStep(){
        console.log(this.step)
        if (this.step +1 < this.users.length)
        this.step += 1;
      },
      previousStep(){
        console.log(this.step)
        if ( this.step >= 0)
        this.step -= 1;
      },
    }
  }
</script>
