<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Employee Dashboard</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center container">
    <header class="d-flex justify-content-center">
      <div class="mt-3 mb-5 p-2 col-8 border border-top-0 border-bottom-0 border-3 border-dark rounded">
        <div class="d-flex flex-column justify-content-center align-items-center border border-top-0 border-bottom-0 border-3 border-secondary rounded">
          <h1 class="pb-2 border-5 border-bottom border-info text-secondary">Employee Dashboard</h1>
        </div>
      </div>
    </header>
    <section class="container vh-80 col-12 text-center">
      <table class="col-12 gap-3">
        <thead>
          <tr class="d-flex align-items-center mb-5 text-start">
            <th class="col-1">ID:</th>
            <th class="col-2">Name:</th>
            <th class="col-2">Email:</th>
            <th class="col-1">Gender:</th>
            <th class="col-1">City:</th>
            <th class="col-1">Age:</th>
            <th class="col-2">Phone No:</th>
            <th class="col-1">Actions:</th>
          </tr>
        </thead>
        <tbody class="d-flex flex-column gap-3">
          <?php
            foreach ($employees as $i => $employee) {
              echo "<tr class='d-flex align-items-center text-start'>";
                echo "<td class='col-1'>$employee[id]</td>";
                echo "<td class='col-2'>$employee[name]</td>";
                echo "<td class='col-2'>$employee[email]</td>";
                echo "<td class='col-1'>$employee[gender]</td>";
                echo "<td class='col-1'>$employee[city]</td>";
                echo "<td class='col-1'>$employee[age]</td>";
                echo "<td class='col-2'>$employee[phone_number]</td>";
                echo "<td class='col-1 d-flex gap-3'>";
                echo "<a href='?controller=employee&action=getEmployee&id=$employee[id]' class='btn btn-success px-4 rounded-pill'>Edit</a><a href='?controller=employee&action=deleteEmployee&id=$employee[id]' class='btn btn-danger'>Delete</a></td>";
                echo "</tr>";
            }
          ?>
        </tbody>
        </table>
    </section>
  </main>
 
      

</body>
</html>

