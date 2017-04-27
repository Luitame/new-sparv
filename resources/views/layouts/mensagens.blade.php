<!-- Messages -->
<div class="row">
    <div class="col-sm-12">

        <!-- box message -->
        <div class="box box-info collapsed-box" id="message">

            <div class="box-header with-border">

                <h3 class="box-title">Mensagens</h3>

                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                </div>

            </div>

            <div class="box-footer" style="overflow: hidden;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nav-tabs-custom tab-info">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab-message-create" data-toggle="tab" aria-expanded="true">Criar</a>
                                </li>
                                <li class="">
                                    <a href="#tab-message-list" data-toggle="tab" aria-expanded="false">Listar</a>
                                </li>
                            </ul>
                            <div class="tab-content" style="overflow: hidden;">
                                <div class="tab-pane active" id="tab-message-create">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <span class="btn btn-primary btn-sm pull-right message-add"><i
                                                    class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12" id="message-list">
                                            <div id="message-nothing-item"
                                                 class='row message-item'
                                                 style='border-bottom: 1px solid #f5f5f5; margin-top: 15px;'>
                                                <div class="col-sm-12 bg-warning" style="padding: 2rem;">
                                                    Nenhuma mensagem adicionada à esta fase
                                                </div>
                                            </div>
                                            <!-- Messages box will be added here -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab-message-list">
                                    <table id="datatable-message-list" class="table table-hover table-condensed" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Mensagem</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /box message -->
    </div>
</div>
<!-- /Messages -->

<!-- Message Template -->
<template id="message-element">
    <div class='row message-item' style='border-bottom: 1px solid #f5f5f5; margin-top: 15px;'>
        <div class='col-sm-8'>
            <div class='form-group'>
                <label>Mensagem</label>
                <input required name='mensagemTxt[]' type='text' class='form-control mensagemTxt'>
                <input required name='mensagemId[]' type='hidden' class='form-control mensagemId'>
            </div>
        </div>
        <div class='col-sm-2'>
            <div class='form-group'>
                <label>Ordem</label>
                <select required name='mensagemOrdem[]' class='form-control'>
                    <option value='antes'>Antes</option>
                    <option value='depois'>Depois</option>
                </select>
            </div>
        </div>
        <div class='col-sm-1'>
            <div class='form-group'>
                <label>Pontos</label>
                <select required name='mensagemPontos[]' class='form-control'>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                    <option value='11'>11</option>
                    <option value='12'>12</option>
                    <option value='13'>13</option>
                </select>
            </div>
        </div>
        <div class='col-sm-1'>
            <div class='form-group'>
                <span class='btn btn-danger message-delete' style='margin-top: 1.7em;'>
                    <i class='fa fa-trash' aria-hidden='true'></i>
                </span>
            </div>
        </div>
    </div>
</template>

<template id="message-nothing-item-element">
    <div class='row message-item' id='message-nothing-item' style='border-bottom: 1px solid #f5f5f5; margin-top: 15px;'>
        <div class='col-sm-12 bg-warning' style="padding: 2rem;">Nenhuma mensagem adicionada à esta fase</div>
    </div>
</template>
<!-- ./ Message Template -->
