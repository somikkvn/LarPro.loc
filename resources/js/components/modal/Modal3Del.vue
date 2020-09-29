<template>
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Delete user</h5>
                   <button type="button" class="close" @click="showDelModal">
                       <span><i class="fa fa-times" aria-hidden="true"></i></span>
                   </button>
               </div>
               <div class="modal-body p-4">
                    <h4 class="text-danger">Are you sure want to delete this user?</h4>
                   <h5>You are deleting 'Vasyl'</h5>
                   <hr>
                   <button class="btn btn-danger btn-lg">Yes</button>
                   &nbsp;&nbsp;&nbsp;
                   <button class="btn btn-success btn-lg">No</button>
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
        showDelModal() {
            this.$emit('closeDelModal')
        }
    }
}
</script>

<style scoped>

</style>
