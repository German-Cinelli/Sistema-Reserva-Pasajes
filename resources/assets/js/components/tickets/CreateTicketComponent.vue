<template>
<div class="modal fade" id="addTicket" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reservas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form @submit.prevent="saveTicket">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cantidad de pasajes: (Máx. 5)</label>
                                    <select id="id" class="form-control select2" style="width: 100%;" v-model="id">
                                        <option selected="selected">1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div><!-- /.col -->

                        </div><!-- /.row -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Reservar</button>
                        </div>

                    </div><!-- /.box-body -->
                </form>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import EventBus from '../../event-bus.js';
export default {
    data(){
        return {
            id: null,
            travel_id: null,
            user_id: null,
        }
    },
    methods: {
        saveTicket: function(){
            axios.post('http://127.0.0.1:8000/tickets',{
                //id: this.id,

            })
            .then(function(res){
                $('#addTicket').modal('hide')
                EventBus.$emit('travel-added', res.data.travel)
            })
            .catch(function(err){
                console.log(err)
            });
        }
    }
}
</script>

<style>

</style>


