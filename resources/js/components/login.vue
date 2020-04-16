<template>
    <form @submit.prevent="login_form">
        <div class="div-login">
            <div class="row">
                <div class="col">
                    <h3>Account</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" v-model="username" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" v-model="password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 div-error">
                     <span v-if="error" class="error">{{error}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 div-btn-login" id="">
                    <button type="submit" class="btn btn-primary btn-login">Login</button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        data(){
            return{
                username:"",
                password:"",
                error:""
            }
        },
        methods: {
            login_form: function () {
                this.error = ''
                axios.post("checklogin",{
                    username: this.username,
                    password: this.password
                }).then((result) => {
                    if(result.data.status == 404 || result.data.status == 500){
                        this.error = result.data.msg              
                    }else{
                        window.location ='dashboard'
                    }
                }).catch((err) => {
                    console.log("Error : ",err);
                });
            }
        },
    }
</script>