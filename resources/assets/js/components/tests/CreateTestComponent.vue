<template>
<div class="modal fade" id="addTest" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir nuevo:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form @submit.prevent="saveTest">
                    <div class="box-body">
                        <div class="row">
                            <label>Fecha (mm/dd/YYYY):</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" v-model="date">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Descripción</label>
                                <input type="text" class="form-control" v-model="description">
                            </div><!-- /.col -->
                            <br>
                            <div class="form-group">
                                <label>Impacto de daño</label>
                                <select id="origin" class="form-control select2" style="width: 100%;" v-model="dmg">
                                    <option selected="selected">1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div><!-- /.col -->
                            <br>
                            <div class="form-group">
                                <label>Probabilidad de amenaza</label>
                                <select id="origin" class="form-control select2" style="width: 100%;" v-model="threat">
                                    <option selected="selected">1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
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
            date: null,
            description: null,
            dmg: null,
            threat: null,
            risk: null,
        }
    },
    methods: {
        saveTest: function(){
            axios.post('http://127.0.0.1:8000/tests',{
                date: this.date,
                description: this.description,
                dmg: this.dmg,
                threat: this.threat,
                risk: this.risk,
            })
            .then(function(res){
                $('#addTest').modal('hide')
                EventBus.$emit('test-added', res.data.test)
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


