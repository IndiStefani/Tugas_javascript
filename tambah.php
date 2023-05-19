<form action="proses.php" method="post">
   <table width="25%" border="0">
      <tr>
         <td>First Name</td>
         <td><input type="text" id="first" name="first_name"></td>
         <span id="error"></span>
      </tr>
      <tr>
         <td>Last Name</td>
         <td><input type="text" id="last" name="last_name"></td>
         <span id="error"></span>
      </tr>
      <tr>
         <td>Email</td>
         <td><input type="text" id="email" name="email"></td>
         <span id="error"></span>
      </tr>
      <tr>
         <td>Telepon</td>
         <td><input type="text" id="phone" name="phone"></td>
         <span id="error"></span>
      </tr>
      <tr>
         <td>Alamat</td>
         <td><input type="text" id="address" name="address"></td>
         <span id="error"></span>
      </tr>

      <tr>
         <td></td>
         <td><button type="submit" onclick="errorMessage()" value="Tambah">Submit</button></td>
      </tr>
   </table>

   <script>
      var firstInput = document.getElementById("first");
      var lastInput = document.getElementById("last");
      var emailInput = document.getElementById("email");
      var phoneInput = document.getElementById("phone");
      var addressInput = document.getElementById("address");


      function errorMessage() {
         var error = document.getElementById("");

         if (is_null(firstInput.value)) {
            error.textContent = "First Name is required !"
            error.style.color = "red"
         } else if (lastInput.value == "") {
            error.textContent = "First Name is required !"
            error.style.color = "red"
         } else if (emailInput.value == "") {
            error.textContent = "First Name is required !"
            error.style.color = "red"
         } else if (phoneInput.value == "") {
            error.textContent = "First Name is required !"
            error.style.color = "red"
         } else if (addressInput.value == "") {
            error.textContent = "First Name is required !"
            error.style.color = "red"
         } else {
            error.textContent = ""
         }
      }


      firstInput.addEventListener("input", errorMessage);
      lastInput.addEventListener("input", errorMessage);
      emailInput.addEventListener("input", errorMessage);
      phoneInput.addEventListener("input", errorMessage);
      addressInput.addEventListener("input", errorMessage);
   </script>
</form>