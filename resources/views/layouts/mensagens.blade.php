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
