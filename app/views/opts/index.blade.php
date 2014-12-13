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
            <li><a href="clons">Klon/Varietas</a></li>
            <li class="active"><a href="opts">OPT</a></li>
            <li><a href="fertils">Pemupukan</a></li>
            <li><a href="irigations">Irigasi</a></li>
        </ul>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Organisme Pengganggu Tanaman
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../public">Beranda</a>
                        </li>
                        <li class="active">
                            OPT
                        </li>
                    </ol>
                </div>
            </div>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <td style="width:10px">No. </td>
                        <td>Nama</td>
                        <td>Jenis</td>
						<td>Penyebab</td>
                        <td style="width:155px">#</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($opts as $key => $value)
                    <tr>
                        <td style="width:10px">{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->type }}</td>
						<td>{{ $value->cause }}</td>

                        <td style="width:155px">
                            
                            <!-- show the opt (uses the show method found at GET /opts/{id} -->
                            <a class="btn btn-xs btn-primary" href="{{ URL::to('opts/' . $value->id) }}">Lihat</a>

                            <!-- edit this opt (uses the edit method found at GET /opts/{id}/edit -->
                            <a class="btn btn-xs btn-primary" href="{{ URL::to('opts/' . $value->id . '/edit') }}">Ubah</a>

                            {{ Form::open(array('url' => 'opts/' . $value->id, 'class' => 'pull-right')) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Hapus', array('class' => 'btn btn-xs btn-primary')) }}
                            {{ Form::close() }}
                            
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-sm btn-primary" href="{{ URL::to('opts/create') }}">Tambah</a>
        </div>        
    </div>
</body>
</html>
