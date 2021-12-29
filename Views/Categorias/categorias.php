<?php 
    headerAdmin($data); 
    getModal('modalCategorias',$data);
?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-box-tissue"></i> <?= $data['page_title'] ?>
                <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fas fa-plus-circle"></i> Nuevo</button>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <?= $data['page_tag'] ?></a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de marcas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">               
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tableCategorias">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Status</th>
                                <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>             
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
<?php footerAdmin($data); ?>