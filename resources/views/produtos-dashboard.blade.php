@extends('layouts.app')
@section('content')
    <section class="produtosDashboard">
        <div class="produtosDashboard__titulo">
            <h2>Produtos</h2>
        </div>
        <div class="container-lg">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="btnTop">
                                <a href="#add" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar Novo Porduto</span></a>
                                <div id="add" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('produtosCreate') }}">
                                                @csrf
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Adicionar Produto</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFile">Imagem do Produto</label>
                                                        <input type="file" class="form-control" id="customFile"  name="image" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="co">Nome</label>
                                                        <input type="text" name="nome" placeholder="nome" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Preço</label>
                                                        <input type="number" name="preco" class="form-control" placeholder="preco" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Descrição</label>
                                                        <input type="text" name="desc" placeholder="descrição" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                    <input type="submit" class="btn btn-success" value="Adicionar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="itensTable table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Imagem do Produto</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{$produto->img}}</td>
                                <td>{{$produto->nome}}</td>
                                <td>R$ {{$produto->preco}}</td>
                                <td>{{$produto->desc}}</td>
                                <td>
                                    <a href="#edit{{$produto->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                    <a href="#delete{{$produto->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Deletar">&#xE872;</i></a>
                                </td>
                            </tr>
                            <!-- Edit Modal HTML -->
                            <div id="edit{{$produto->id}}" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="{{ route('produtosUpdate') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$produto->id}}">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editar Produto</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="form-label" for="customFile">Imagem do Produto</label>
                                                    <input type="file" name="image" class="form-control" value="{{$produto->img}}" id="customFile" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input type="text" name="nome" value="{{$produto->nome}}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Preço</label>
                                                    <input type="number" name="preco" value="{{$produto->preco}}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descrição</label>
                                                    <input type="text" name="desc" class="form-control" value="{{$produto->desc}}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                <input type="submit" class="btn btn-info" value="Salvar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Delete Modal HTML -->
                            <div id="delete{{$produto->id}}" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="{{ route('produtosDelete') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$produto->id}}">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Deletar Produto</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Tem certeza de que deseja excluir esse produto?</p>
                                                <p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                <input type="submit" class="btn btn-danger" value="Deletar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection
