<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Blood-Link</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Custom CSS -->
  <style>
    /* Add your custom styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: black; /* Updated background color */
      color: white; /* Updated text color */
      padding-top: 70px; /* Adjusted padding for the fixed navbar */
    }

    .navbar {
      background-color: red; /* Updated navbar background color */
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
    }

    h1 {
      text-align: center;
      color: #dc3545;
    }

    p {
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .animation-container {
      position: relative;
      width: 100%;
      height: 300px;
      overflow: hidden;
      margin-bottom: 50px;
    }

    

    .animation {
  position: absolute;
  width: 100%; /* Adjusted width to fit the container */
  height: 100%;
  background-image: url('img/a3.jpg');
  background-size: contain; /* Changed background size to contain */
  animation: slide 20s linear infinite;
  filter: brightness(70%) sepia(30%);
}


    @keyframes slide {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-red">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Blood-Link</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin-home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_us.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donor-list.php">Donor List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ngo-list.php">NGO List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="exchange-blood-list1.php">Blood Transfusion List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stock-blood-list.php">Stock</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="statistics.php">Statistics</a>
                    </li>
                </ul>
                <p><a href="logout.php" class="btn btn-danger">Logout</a></p>
            </div>
        </div>
    </nav>

  <!-- About Us Content -->
  <div class="container">
    <h1>About Us</h1>
    <div class="animation-container">
      <div class="animation"></div>
    </div>
    <p>Blood donation and distribution face challenges like cumbersome record-keeping and fragmented communication,
      worsened by outdated systems lacking real-time updates on blood supply and demand. This can lead to wastage or
      shortages in critical situations. Manual record-keeping consumes time and resources, increasing errors and
      hindering decision-making. Improved systems are needed to enhance efficiency and transparency in these vital
      processes.</p>
    <p>By harnessing the power of technology, Blood-Link not only improves the efficiency and effectiveness of blood
      donation and distribution but also enhances patient outcomes and ultimately saves lives. By fostering a cohesive
      community and facilitating connections among individuals through the medium of blood, Blood-Link serves as a
      catalyst for positive change in the realm of healthcare.</p>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-1KjoqZNJnYIFkS28UfYE2w38F5VhOatpl69MLZZj9emVhz+R7NhAe1b+eVNZ+BT+mRplVI3a31f1A9e66QTuxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-Px/Xe6nFmxQVKlJ+jPxzDc5q8aunvoMTrhnkzE8PqPmv2Ws0XhF2GtR2OjJ0niF2" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha384-Tmdw4bsx6/Kh4oxx2X7ddQPh6OrQxal6HJhuRp0Kt2KLIwrV5Rla4KNEz1U8vxdE" crossorigin="anonymous"></script>
</body>

</html>