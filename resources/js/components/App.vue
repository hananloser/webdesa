<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Selamat Datang Hanan 
              
          </div>
          <div class="card-body">I'm an example component.</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  data(){
      return {
          post : {}
      }
  },
  mounted(){
      console.log('hai hanan');
  }
};
</script>
