<?php
session_start();
include_once ("database.php")?>
<?php
$check = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>House Rent</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="create_post_Style.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="main-body">
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="agent_dashboard.php">Home</a></li>
          <li class="breadcrumb-item"><a href="create_post.php">Create Post</a></li>
          <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
        </ol>
      </nav>

      <div class="container_one">
        <form action="save_post.php" method="post" enctype="multipart/form-data">
          <label for="post_title">Post Title</label>
          <input type="text" id="post_title" name="post_title" placeholder="Your post title..">

          <label for="post_description">Post Description</label>
          <textarea id="post_description" name="post_description" placeholder="Write description.." style="height:200px"></textarea>

          <label for="post_image">Post Image</label><br>
          <input type="file" id="post_image" name="post_image"><br><br>

          <label for="category">Post for </label>
          <select id="category" name="category">
            <option value="bachelor">Bachelor</option>
            <option value="family">Family</option>
            <option value="female_student">Female Student</option>
            <option value="employee">Employee</option>
          </select>

          <label for="post_type">Post Type </label>
          <select id="post_type" name="post_type">
            <option value="flat">Flat</option>
            <option value="room">Room</option>
            <option value="seat">Seat</option>
            <option value="floor">Floor</option>
          </select>

          <label for="sublet">Sublet </label>
          <select id="sublet" name="sublet">
            <option value="no">No</option>
            <option value="yes">Yes</option>
          </select>

          <label for="month">From Month </label>
          <select id="month" name="month">
            <option value="january">January</option>
            <option value="february">February</option>
            <option value="march">March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="august">August</option>
            <option value="september">September</option>
            <option value="october">October</option>
            <option value="november">November</option>
            <option value="december">December</option>
          </select>

          <label for="district">District</label>
          <input type="text" id="district" name="district" placeholder="Write District..">

          <label for="area_name">Name of the Area</label>
          <input type="text" id="area_name" name="area_name" placeholder="Write name of the area..">

          <label for="address">Full Address</label>
          <input type="text" id="address" name="address" placeholder="Write full address..">

          <label for="price">Rent BDT/month</label><br>
          <input type="number" id="price" name="price"><br>

          <label for="negotiable">Negotiable </label>
          <select id="negotiable" name="negotiable">
            <option value="no">No</option>
            <option value="yes">Yes</option>
          </select>

            <label for="agent_id">Agent ID</label><br>
            <?php
            $query = "SELECT * from agents WHERE `email`='$check';";
            $result = mysqli_query($con,$query);
            $res = mysqli_fetch_array($result);
            ?>
            <input type="number" id="agent_id" name="agent_id" placeholder="Your Agent Id is <?php echo $res['agent_id'] ?>"><br>

          <input type="submit" value="Submit" name="submit">
        </form>
      </div>

    </div>
  </div>
</body>
</html>