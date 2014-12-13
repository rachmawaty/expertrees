<!-- app/views/nerds/show.blade.php -->

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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="../../public">ExperTrees</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="../clons">Klon/Varietas</a></li>
            <li><a href="../opts">OPT</a></li>
            <li><a href="../fertils">Pemupukan</a></li>
            <li><a href="../irigations">Irigasi</a></li>
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
                            <a href="../../public">Beranda</a>
                        </li>
                        <li>
                            <a href="../clons">Klon</a>
                        </li>
                        <li class="active">
                            Lihat Klon
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-6">
	            	<div class="panel panel-primary">
	            		<div class="panel-heading">
							<h3 class="panel-title">{{ $clon->name }}</h3>
						</div>
						<div class="panel-body">
							{{ $clon->description }}
						</div>
		        	</div>
	        	</div>
            </div>			
        </div>        
    </div>
</div>
</body>
</html>