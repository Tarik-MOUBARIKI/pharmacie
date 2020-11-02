<!DOCTYPE html>
<html>

<head>
  <title>Dashborad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://kit.fontawesome.com/f87defdbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>

  <link rel="stylesheet" href="css/style.css">
</head>

<body>




  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">MTPHARMACIE</a>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
       
      
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="order.php">
                commandes
              </a>
            </li>
           

          </ul>



        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Gestion des produits pharmaceutiques</h2>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-xl-6 d-flex justify-content-start align-items-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            Add New Product
            </button>
            </div>
            <div class="col-12 col-md-12 col-xl-6 d-flex justify-content-start align-items-center">
                
           
            </div>
           
          </div>

        <table class="table" id="myTable">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th>Nom</th>
                <th scope="col">categorie</th>
                <th scope="col">Prix</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><img width="25%" src="../public/images/download.jpg"></td>
                <td>Doliplane</td>
                <td>sans ordonnance</td>
                <td>Otto</td>
                <td>DOLIPRANE adultes 1000 mg 8 sachets</td>
                <td>
                    <button type="button" class="btn btn-info">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
                </tr>

                <tr>
                <th scope="row">2</th>
                <td><img width="25%" src="../public/images/download.jpg"></td>
                <td>Doliplane</td>
                <td>sans ordonnance</td>
                <td>Otto</td>
                <td>DOLIPRANE adultes 1000 mg 8 sachets</td>
                <td>
                    <button type="button" class="btn btn-info">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
                </tr>

                <tr>
                <th scope="row">3</th>
                <td><img width="25%" src="../public/images/download.jpg"></td>
                <td>Doliplane</td>
                <td>sans ordonnance</td>
                <td>Otto</td>
                <td>DOLIPRANE adultes 1000 mg 8 sachets</td>
                <td>
                    <button type="button" class="btn btn-info">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
                </tr>
               
            </tbody>
        </table>

        </div>
       

      

      </main>
    </div>
  </div>


  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group">
            <label style="font-weight: 600; font-size: 17px;" for="exampleInputEmail1">Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label style="font-weight: 600; font-size: 17px;"for="exampleInputPassword1">Nom</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-group">
        <label style="font-weight: 600; font-size: 17px;"for="exampleInputPassword1">Categorie</label>
                  <select name="city" class="form-control" id="inputGroupSelect01" required>
                    <option selected value="complément alimentaire">complément alimentaire</option>
                    <option value="médicament avec ordonnance">médicament avec ordonnance</option>
                    <option value="sans ordonnance">sans ordonnance</option>
                    <option value="autre">autre</option>
                  </select>
        </div>
                
        <div class="form-group">
            <label style="font-weight: 600; font-size: 17px;" for="exampleInputEmail1">Prix</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label style="font-weight: 600; font-size: 17px;" for="exampleInputEmail1">Description</label>
            <textarea  class="form-control" id="exampleInputEmail1"></textarea>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Add</button>
      </div>
    </div>
  </div>
</div>
  


</body>

</html>
