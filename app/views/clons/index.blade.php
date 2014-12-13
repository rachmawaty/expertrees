<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ExperTrees</title>

    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="../public">ExperTrees</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="clons">Klon/Varietas</a></li>
            <li><a href="opts">OPT</a></li>
            <li><a href="fertils">Pemupukan</a></li>
            <li><a href="irigations">Irigasi</a></li>
        </ul>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Klon/Varietas
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../public">Beranda</a>
                        </li>
                        <li class="active">
                            Klon
                        </li>
                    </ol>
                </div>
            </div>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <td style="width:10px">No. </td>
                        <td>Nama</td>
                        <td>Deskripsi</td>
                        <td style="width:155px">#</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($clons as $key => $value)
                    <tr>
                        <td style="width:10px">{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->description }}</td>

                        <td style="width:155px">
                            
                            <!-- show the clon (uses the show method found at GET /clons/{id} -->
                            <a class="btn btn-xs btn-primary" href="{{ URL::to('clons/' . $value->id) }}">Lihat</a>

                            <!-- edit this clon (uses the edit method found at GET /clons/{id}/edit -->
                            <a class="btn btn-xs btn-primary" href="{{ URL::to('clons/' . $value->id . '/edit') }}">Ubah</a>

                            {{ Form::open(array('url' => 'clons/' . $value->id, 'class' => 'pull-right')) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Hapus', array('class' => 'btn btn-xs btn-primary')) }}
                            {{ Form::close() }}
                            
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-sm btn-primary" href="{{ URL::to('clons/create') }}">Tambah</a>
        </div>        
    </div>
</body>
</html>
