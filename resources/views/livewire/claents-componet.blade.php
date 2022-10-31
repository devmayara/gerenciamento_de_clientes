    <div>
        <div class="container mt-5">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h3><strong>Gerenciamento do cadastro de clientes</strong></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 style="float: left;"><strong>Lista de Clientes</strong></h5>
                            <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#addClaentModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg> Novo Cliente
                            </button>
                        </div>
                        <div class="card-body">
                            @if (session()->has('message'))
                                <div class="alert alert-success text-center">{{ session('message') }}</div>
                            @endif

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>Email</th>
                                        <th style="text-align: center;">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($claents->count() > 0)
                                    @foreach ($claents as $claent)
                                    <tr>
                                        <td>{{ $claent->id }}</td>
                                        @if(empty($claent->surname))
                                            <td>{{ $claent->name }}</td>
                                        @else
                                            <td>{{ $claent->surname }}</td>
                                        @endif
                                        <td>{{ $claent->phone }}</td>
                                        <td>{{ $claent->email }}</td>
                                        <td style="text-align: center;">
                                            <button class="btn btn-sm btn-secondary p-2"
                                                wire:click="viewClaentDetails({{ $claent->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                                    <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                                </svg>
                                            </button>
                                            <button class="btn btn-sm btn-primary p-2"
                                                wire:click="editClaents({{ $claent->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </button>
                                            <button class="btn btn-sm btn-danger p-2"
                                                wire:click="deleteConfirmation({{ $claent->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="5" style="text-align: center;">
                                            <small>Não temos clientes cadastrados!</small>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- addClaentModal -->
        <div wire:ignore.self class="modal fade" id="addClaentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo Cliente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="storeClaentData">

                            <h5 class="mb-3">Dados pessoais:</h5>
                            <div class="form-group row">
                                <label for="name" class="col-3">Nome:</label>
                                <div class="col-9">
                                    <input type="text" id="name" class="form-control" wire:model="name">
                                    @error('name')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="surname" class="col-3">Nome Fantasia:</label>
                                <div class="col-9">
                                    <input type="text" id="surname" class="form-control" wire:model="surname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cpf_cnpj" class="col-3">CPF/CNPJ:</label>
                                <div class="col-9">
                                    <input type="text" id="cpf_cnpj" class="form-control cpf_cnpj" wire:model="cpf_cnpj" placeholder="000.000.000-00" autocomplete="off" maxlength="14" onkeyup="mask_cpf()">
                                    @error('cpf_cnpj')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-3">Telefone:</label>
                                <div class="col-9">
                                    <input type="text" id="phone" class="form-control phone" wire:model="phone" placeholder="(00)00000-0000">
                                    @error('phone')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-3">E-mail:</label>
                                <div class="col-9">
                                    <input type="email" id="email" class="form-control" wire:model="email" placeholder="exemplo@email.com">
                                    @error('email')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <h5 class="mb-3">Endereço:</h5>
                            <div class="form-group row">
                                <label for="zip" class="col-3">Cep:</label>
                                <div class="col-9">
                                    <input type="text" id="zip" class="form-control zip" wire:model="zip" placeholder="000000-000">
                                    @error('zip')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-3">Endereço:</label>
                                <div class="col-9">
                                    <input type="text" id="address" class="form-control" wire:model="address">
                                    @error('address')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="state" class="col-3">Estado:</label>
                                <div class="col-9">
                                    <select id="state" class="form-control" wire:model="state">
                                        <option value="" selected>Selecione</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>
                                    @error('state')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="complement" class="col-3">Complemento:</label>
                                <div class="col-9">
                                    <input type="text" id="complement" class="form-control" wire:model="complement">
                                    @error('complement')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-3">Cidade:</label>
                                <div class="col-9">
                                    <input type="text" id="city" class="form-control" wire:model="city">
                                    @error('city')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="num" class="col-3">Número:</label>
                                <div class="col-9">
                                    <input type="number" id="num" class="form-control" wire:model="num">
                                    @error('num')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="add_contact">
                                <button type="button" class="btn btn-sm btn-primary" style="float: left;" id="add_contact">Adicionar outro Contato</button><br><br>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-3"></label>
                                <div class="col-9">
                                    <button type="submit" class="btn btn-sm btn-primary" id="contact" style="float: right;">Enviar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- viewClaentModal -->
        <div wire:ignore.self class="modal fade" id="viewClaentModal" tabindex="-1" data-backdrop="static"
            data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Informações do Cliente de ID: {{ $view_claent_id }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="closeViewClaentModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Name: </th>
                                    <td>{{ $view_claent_name }}</td>
                                </tr>

                                <tr>
                                    <th>Telefone: </th>
                                    <td>{{ $view_claent_phone }}</td>
                                </tr>

                                <tr>
                                    <th>Email: </th>
                                    <td>{{ $view_claent_email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- editClaentModal -->
        <div wire:ignore.self class="modal fade" id="editClaentModal" tabindex="-1" data-backdrop="static"
            data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Cliente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form wire:submit.prevent="editClaentData">

                            <h5 class="mb-3">Dados pessoais:</h5>
                            <div class="form-group row">
                                <label for="name" class="col-3">Nome:</label>
                                <div class="col-9">
                                    <input type="text" id="name" class="form-control" wire:model="name">
                                    @error('name')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname" class="col-3">Nome Fantasia:</label>
                                <div class="col-9">
                                    <input type="text" id="surname" class="form-control" wire:model="surname">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cpf_cnpj" class="col-3">CPF/CNPJ:</label>
                                <div class="col-9">
                                    <input type="text" id="cpf_cnpj" class="form-control cpf_cnpj" wire:model="cpf_cnpj">
                                    @error('cpf_cnpj')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-3">Telefone:</label>
                                <div class="col-9">
                                    <input type="text" id="phone" class="form-control phone" wire:model="phone">
                                    @error('phone')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-3">E-mail:</label>
                                <div class="col-9">
                                    <input type="email" id="email" class="form-control" wire:model="email">
                                    @error('email')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <h5 class="mb-3">Endereço:</h5>
                            <div class="form-group row">
                                <label for="zip" class="col-3">Cep:</label>
                                <div class="col-9">
                                    <input type="text" id="zip" class="form-control zip" wire:model="zip">
                                    @error('zip')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-3">Endereço:</label>
                                <div class="col-9">
                                    <input type="text" id="address" class="form-control" wire:model="address">
                                    @error('address')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="state" class="col-3">Estado:</label>
                                <div class="col-9">
                                    <input type="text" id="state" class="form-control" wire:model="state">
                                    @error('state')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="complement" class="col-3">Complemento:</label>
                                <div class="col-9">
                                    <input type="text" id="complement" class="form-control" wire:model="complement">
                                    @error('complement')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-3">Cidade:</label>
                                <div class="col-9">
                                    <input type="text" id="city" class="form-control" wire:model="city">
                                    @error('city')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="num" class="col-3">Número:</label>
                                <div class="col-9">
                                    <input type="number" id="num" class="form-control" wire:model="num">
                                    @error('num')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <h5 class="mb-3">Contatos:</h5>
                            <div class="form-group row">
                                <label for="name_1" class="col-3">Nome:</label>
                                <div class="col-9">
                                    <input type="text" id="name_1" class="form-control" wire:model="name_1">
                                    @error('name_1')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone_1" class="col-3">Telefone:</label>
                                <div class="col-9">
                                    <input type="text" id="phone_1" class="form-control phone_1" wire:model="phone_1">
                                    @error('phone_1')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_1" class="col-3">E-mail:</label>
                                <div class="col-9">
                                    <input type="email_1" id="email_1" class="form-control" wire:model="email_1">
                                    @error('email_1')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-3"></label>
                                <div class="col-9">
                                    <button type="submit" class="btn btn-sm btn-primary" style="float: right;">Slavar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- deleteClaentModal -->
        <div wire:ignore.self class="modal fade" id="deleteClaentModal" tabindex="-1" data-backdrop="static"
            data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirmação</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pt-4 pb-4">
                        <h6>Tem certeza que deseja excluir os dados do cliente?</h6>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-primary" wire:click="cancel()" data-dismiss="modal"
                            aria-label="Close">Cancelar</button>
                        <button class="btn btn-sm btn-danger" wire:click="deleteClaentData()">Sim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.zip').mask('00000-000');
                $('.phone').mask('(00)00000-0000');
                $('.cpf_cnpj').mask('000.000.000-00');
            });


            var cont = 1;
            $("#add_contact").click(function() {
                cont++;
                $(".add_contact").append('<div id="campos'+cont+'"> <h5 class="col-9 mb-3">Contatos:</h5> <button type="button" class="btn btn-sm btn-secondary btn-remove" style="float: right;" id="'+cont+'">Remover Contato</button> <br><br> <div class="form-group row"> <label for="name_1" class="col-3">Nome:</label> <div class="col-9"> <input type="text" id="name_1" class="form-control" wire:model="name_1"> </div> </div> <div class="form-group row"> <label for="phone_1" class="col-3">Telefone:</label> <div class="col-9"> <input type="text" id="phone_1" class="form-control phone_1" wire:model="phone_1" placeholder="(00)00000-0000"> </div> </div> <div class="form-group row"> <label for="email_1" class="col-3">E-mail:</label> <div class="col-9"> <input type="email_1" id="email_1" class="form-control" wire:model="email_1" placeholder="exemplo@email.com"> </div> </div> </div>');
            });
            $("form").on("click", ".btn-remove", function() {
                var button_id = $(this).attr("id");
                $('#campos'+button_id+'').remove("");
            });


            window.addEventListener('close-modal', event => {
                $('#addClaentModal').modal('hide');
                $('#editClaentModal').modal('hide');
                $('#deleteClaentModal').modal('hide');
            });
            window.addEventListener('show-edit-claent-modal', event => {
                $('#editClaentModal').modal('show');
            });
            window.addEventListener('show-delete-confirmation-modal', event => {
                $('#deleteClaentModal').modal('show');
            });
            window.addEventListener('show-view-claent-modal', event => {
                $('#viewClaentModal').modal('show');
            });
        </script>
    @endpush
