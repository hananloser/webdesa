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
import Axios from 'axios';
export default {
  name: "App",
  data(){
      return {
          post : {}
      }
  },
  mounted(){
      console.log('hai hanan');
      this.load();
  },
  
  methods : {
      load : () => {
        Axios.get('/api/layanan').then(res => {
          console.log(res.data);
        })
      }
  }

};
</script>
