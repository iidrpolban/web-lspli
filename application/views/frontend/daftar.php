<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

<form id="regForm" action="<?php echo base_url(); ?>homepage/daftar" method="post">
  <h3 class="text-center" >Formulir Permohonan Asesemen Kompetensi <br />Lembaga Sertifikasi Profesi Lingkungan Indonesia </h3>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
	<hr />
	<h5>Bagian 1 : Rincian Data Pemohon<br />
	A. Data Pribadi
	</h5>
	<hr />
    <p>Nama Lengkap <input placeholder="Nama Lengkap" oninput="this.className = ''" name="fname"></p>
    <p>NIK<input placeholder="NIK" oninput="this.className = ''" name="lname"></p>
	<p>Tempat Lahir <input placeholder="Tempat Lahir" oninput="this.className = ''" name="fname"></p>
    <p>Tanggal Lahir<input placeholder="Tanggal Lahir" oninput="this.className = ''" name="lname"></p>
	<p>Jenis Kelamin <input placeholder="Jenis Kelamin" oninput="this.className = ''" name="fname"></p>
    <p>Kebangsaan<input placeholder="Kebangsaan" oninput="this.className = ''" name="lname"></p>
	<p>Alamat Rumah <input placeholder="Alamat Rumah" oninput="this.className = ''" name="fname"></p>
    <p>Provinsi<input placeholder="Provinsi" oninput="this.className = ''" name="lname"></p>
	<p>Kabupaten/Kota<input placeholder="Kabupaten/Kota" oninput="this.className = ''" name="fname"></p>
    <p>Kode Pos<input placeholder="Kode Pos" oninput="this.className = ''" name="lname"></p>
	<p>No.Telp Rumah <input placeholder="No.Telp Rumah" oninput="this.className = ''" name="fname"></p>
    <p>No.Telp Kantor<input placeholder="No.Telp Kantor" oninput="this.className = ''" name="lname"></p>
	<p>No.HP <input placeholder="No.HP" oninput="this.className = ''" name="fname"></p>
    <p>E-mail<input placeholder="E-mail" oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab"><hr />
	<h5>
	B. Data Pendidikan
	</h5>
	<hr />
    <p>Pendidikan Terakhir<input placeholder="Pendidikan Terakhir" oninput="this.className = ''" name="email"></p>
    <p>Tahun<input placeholder="Tahun" oninput="this.className = ''" name="phone"></p>
	<p>Jurusan/Program<input placeholder="Jurusan/Program" oninput="this.className = ''" name="email"></p>
  </div>
  <div class="tab"><hr />
    <h5>
	C. Data Pekerjaan Sekarang
	</h5>
	<hr />
    <p>Nama Lembaga/Perusahaan<input placeholder="Nama Lembaga/Perusahaan" oninput="this.className = ''" name="email"></p>
    <p>Jabatan<input placeholder="Jabatan" oninput="this.className = ''" name="phone"></p>
	<p>Alamat<input placeholder="Alamat" oninput="this.className = ''" name="email"></p>
	<p>Kode Pos<input placeholder="Kode Pos" oninput="this.className = ''" name="email"></p>
    <p>Lama bekerja ditambang<input placeholder="Lama bekerja ditambang" oninput="this.className = ''" name="phone"></p>
	<p>Jumlah anak buah<input placeholder="Jumlah anak buah" oninput="this.className = ''" name="email"></p>
  </div>
  <div class="tab"><hr /><h5>
	D. Data Permohonan Sertifikasi
	</h5>
	<hr />
    <p>Tujuan Asesmen<input placeholder="Tujuan Asesmen" oninput="this.className = ''" name="email"></p>
    <p>Skema Sertifikasi<input placeholder="Skema Sertifikasi" oninput="this.className = ''" name="phone"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>