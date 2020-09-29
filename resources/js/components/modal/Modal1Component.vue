<template>
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Add new user</h5>
                   <button type="button" class="close" @click="showModal">
                       <span><i class="fa fa-times" aria-hidden="true"></i></span>
                   </button>
               </div>
               <div class="modal-body p-4">
                   <form action="#" method="post">
                       <div class="form-group">
                           <input type="text" name="name" class="form-control form-control-lg" placeholder="Name">
                       </div>
                       <div class="form-group">
                           <input type="email" name="email" class="form-control form-control-lg" placeholder="Email">
                       </div>
                       <div class="form-group">
                           <button class="btn btn-success btn-block btn-lg">
                               &nbsp;&nbsp;Add New User
                           </button>
                       </div>
                   </form>
               </div>
           </div>
       </div>

</template>

<script>
export default {
    data() {
        return {

        }
    },

    methods: {
        showModal() {
            this.$emit('closeModal')
        }
    }
}

</script>

<style scoped>

</style>
