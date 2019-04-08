<template>
<div class="modal fade" id="addEquipament" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir nuevo:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form @submit.prevent="saveEquipament">
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group">
                                <label>Tipo</label>
                                <select id="origin" class="form-control select2" style="width: 100%;" v-model="type">
                                    <option selected="selected">Equipamiento</option>
                                    <option>Software</option>
                                </select>
                            </div><!-- /.col -->
                            <br>
                            <div class="form-group">
                                <label>Descripción</label>
                                <input type="text" class="form-control" v-model="description">
                            </div><!-- /.col -->
                            <br>
                            <div class="form-group">
                                <label>Marca</label>
                                <input type="text" class="form-control" v-model="model">
                            </div><!-- /.col -->
                            <br>
                            <div class="form-group">
                                <label>Estado</label>
                                <select id="origin" class="form-control select2" style="width: 100%;" v-model="status">
                                    <option selected="selected">Operativo</option>
                                    <option>No operativo</option>
                                </select>
                            </div><!-- /.col -->
                             <br><br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Añadir</button>
                            </div>
                        </div><!-- /.row -->
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
            type: null,
            description: null,
            model: null,
            status: null,
        }
    },
    methods: {
        saveEquipament: function(){
            axios.post('http://127.0.0.1:8000/equipaments',{
                type: this.type,
                description: this.description,
                model: this.model,
                status: this.status,
            })
            .then(function(res){
                $('#addEquipament').modal('hide')
                EventBus.$emit('equipament-added', res.data.equipament)
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


