<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8 m-auto">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Register From</h4>
            <form action="">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" v-model="form.name" class="form-control" placeholder="Enter Name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" v-model="form.email" class="form-control" placeholder="Enter email">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" v-model="form.password" class="form-control" placeholder="Enter Password">
              </div>
               <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" v-model="form.password_confirmation" class="form-control" placeholder="Enter Confirm Password">
              </div>

              <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import axios from 'axios';
import { reactive } from 'vue';

let form = reactive({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
});

const register = async () => {
  const response = await axios.post('', form)
    .then(res => {
      console.log(res);
    });

  
}
</script>

<style>
</style>