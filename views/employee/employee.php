<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Employee Page</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center container">
    <header class="d-flex justify-content-center">
      <div class="mt-3 mb-5 p-2 col-8 border border-top-0 border-bottom-0 border-3 border-primary rounded">
        <div class="d-flex  align-items-center border border-top-0 border-bottom-0 border-4 border-info rounded">
          <h1 class="pb-2 border-info text-secondary justify-self-start mx-auto">Employee Page</h1>
        </div>
      </div>
    </header>
    <section>
      <form method="POST" action=<?= "index.php?controller=employee&action=updateEmployee&id=$employee[id]";?> class="form-group">
        <fieldset>
          <legend class="mb-3"><h5><?="Employee No. " . $employee['id'];?></h5></legend>
          <div class="row col-12 mb-4">
            <div class="form-group col-6">
              <label for="name" class="form-label">Name: </label>
              <input type="text" id="name" name="name" class="form-control col-1" value=<?php echo isset($employee['name']) ? $employee['name'] : null; ?> >
            </div>
            <div class="form-group col-6">
              <label for="lastName" class="form-label">Last Name: </label>
              <input type="text" id="lastName" name="last_name" class="form-control col-1" value=<?php echo isset($employee['last_name']) ? $employee['last_name'] : null; ?> >
            </div>
          </div>

          <div class="row col-12 mb-4">
            <div class="form-group col-6">
              <label for="email" class="form-label">Email: </label>
              <input type="text" id="email" name="email" class="form-control col-1" value=<?php echo isset($employee['email']) ? $employee['email'] : null; ?> >
            </div>
            <div class="form-group col-6">
              <label for="gender" class="form-label">Gender: </label>
              <select id="gender" name="gender" class="form-control col-1">
                <option value="">Please Select</option>
                <option value="1" <?= isset($employee['gender_id']) && $employee['gender_id'] === 1 ? 'selected' : null; ?>)>Male</option>
                <option value="2" <?= isset($employee['gender_id']) && $employee['gender_id'] === 2 ? 'selected' : null; ?>)>Female</option>
                <option value="">Let me type...</option>
              </select> 
            </div>
          </div>

          <div class="row col-12 mb-4">
            <div class="form-group col-6">
              <label for="city" class="form-label">City: </label>
              <input type="text" id="city" name="city" class="form-control col-1" value=<?php echo isset($employee['city']) ? $employee['city'] : null; ?> >
            </div>
            <div class="form-group col-6">
              <label for="streetAddress" class="form-label">Street Address:</label>
              <input type="text" id="streetAddress" name="street_address" class="form-control col-1" value=<?php echo isset($employee['street_address']) ? $employee['street_address'] : null; ?> >
            </div>
          </div>

          <div class="row col-12 mb-4">
            <div class="form-group col-6">
              <label for="state" class="form-label">State: </label>
              <input type="text" id="city" name="state" class="form-control col-1" value=<?php echo isset($employee['state']) ? $employee['state'] : null; ?> >
            </div>
            <div class="form-group col-6">
              <label for="age" class="form-label">Age:</label>
              <input type="text" id="age" name="age" class="form-control col-1" value=<?php echo isset($employee['age']) ? $employee['age'] : null; ?> >
            </div>
          </div>

          <div class="row col-12 mb-4">
            <div class="form-group col-6">
              <label for="postCode" class="form-label">PostCode: </label>
              <input type="text" id="postCode" name="postCode" class="form-control col-1" value=<?php echo isset($employee['post_code']) ? $employee['post_code'] : null; ?> >
            </div>
            <div class="form-group col-6">
              <label for="phoneNo" class="form-label">Phone:</label>
              <input type="text" id="phoneNo" name="phoneNo" class="form-control col-1" value=<?php echo isset($employee['phone_number']) ? $employee['phone_number'] : null; ?> >
            </div>
          </div>      
        </fieldset>
        <div class="row col-10s mb-4 gap-4 d-flex justify-content-center mt-4">
          <button type="submit" class="col-3 btn btn-success border-dark rounded"><b>Update</b></button>
          <a type="button" href="?controller=employee&action=getAllEmployees" class="col-3 btn btn-primary border-dark rounded"><b>Go Back</b></a>
        </div>
       
      </form> 
    </section>
  </main>
 
      

</body>
</html>

