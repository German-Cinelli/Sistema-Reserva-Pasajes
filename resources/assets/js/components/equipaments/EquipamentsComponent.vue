<template>
    <div class="row">
        <spinner v-show="loading"></spinner>
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Lista de viajes</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Origen</th>
                  <th>Destino</th>
                  <th>Fecha</th>
                  <th>Precio</th>
                  <th></th>
                </tr>
                <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="/tickets/" button type="button" class="btn btn-info">Editar</a>
                            <a href="#" button type="button" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</template>

<script>
    import EventBus from '../../event-bus.js';
    export default {
        data(){
            return {
                tests: [],
                loading: true,
            }
        },
        created(){
            EventBus.$on('test-added', data => {
                this.tests.push(data)
            })
        },
        mounted() {
            axios
                .get('http://127.0.0.1:8000/tests')
                .then((res) => {
                    this.tests = res.data
                    this.loading = false
                })
        }
    }
</script>
