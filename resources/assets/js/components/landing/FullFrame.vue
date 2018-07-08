<template>
  <div>	
   <p>Your name is {{user.name}}</p>	
	
   <p>Your email is {{user.email}}</p>	
  </div>	  
</template>

<script>
    export default {
    	props:['user'],
        mounted() {
            console.log('Component mounted.')
            console.log(this.user)
        },

    }
</script>
styles	