<template>
<div class="modal fade" id="addTravel" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Viaje</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form @submit.prevent="saveTravel">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Origen</label>
                                    <select id="origin" class="form-control select2" style="width: 100%;" v-model="origin">
                                        <option selected="selected">Bella Union</option>
                                        <option>Ciudad de la Costa</option>
                                        <option>La Boyada</option>
                                        <option>La Paloma</option>
                                        <option>Las Piedras</option>
                                        <option>Parque del Plata</option>
                                        <option>Punta del Este</option>
                                        <option>Toledo</option>
                                        <option>Tres Cruces</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div><!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Destino</label>
                                    <select id="destination" class="form-control select2" style="width: 100%;" v-model="destination">
                                        <option selected="selected">Bella Union</option>
                                        <option>Ciudad de la Costa</option>
                                        <option>La Boyada</option>
                                        <option>La Paloma</option>
                                        <option>Las Piedras</option>
                                        <option>Parque del Plata</option>
                                        <option>Punta del Este</option>
                                        <option>Toledo</option>
                                        <option>Tres Cruces</option>
                                    </select>
                                </div><!-- /.form-group -->

                            </div><!-- /.col -->

                        </div><!-- /.row -->

                        <label>Fecha (mm/dd/YYYY):</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                                <input type="text" class="form-control pull-right" id="datepicker" v-model="datetime">
                            </div>

                            <br>

                        <label>Precio:</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" v-model="price">
                            <span class="input-group-addon">.00</span>
                        </div><!-- /.input-group -->
                        <br><br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Añadir</button>
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
            origin: null,
            destination: null,
            datetime: null,
            price: null,
        }
    },
    methods: {
        saveTravel: function(){
            axios.post('http://127.0.0.1:8000/travels',{
                origin: this.origin,
                destination: this.destination,
                datetime: this.datetime,
                price: this.price,
            })
            .then(function(res){
                $('#addTravel').modal('hide')
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


