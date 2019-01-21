<?php  include "db_con.php"; ?>
<?php  include "Assignment_functions.php"; ?>

<?php  educationalBackground(); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="Assignmentcss.css">
</head>
<body>
  <form method="post" action="Summary.phpl">
    <section>
            <h2>Educational Background</h2>
            <p>
              <label for="hs"><span>Highschool:</span><strong><abbr title="required">*</abbr></strong></label>
              <select>Certification:
                <option value="" name="high_certifcate">SPM</option>
                <option value="" name="high_certifcate">O-Levels</option>
                <option value=""  name="high_certifcate">Others</option>
              </select>
              <select id="hs" name="degree">
                <option>CGPA</option>
                <option value="A+" name="high_cgpa">4.00</option>
                <option value="A"  name="high_cgpa">3.75</option>
                <option value="A-"  name="high_cgpa">3.50</option>
                <option value="B+" name="high_cgpa">3.25</option>
                <option value="B" name="high_cgpa">3.00</option>
                <option value="B-" name="high_cgpa">2.75</option>
                <option value="C+" name="high_cgpa">2.50</option>
                <option value="C" name="high_cgpa">2.25</option>
                <option value="C-" name="high_cgpa">2.00</option>
                <option value="D" name="high_cgpa">1.50</option>
                <option value="E" name="high_cgpa">1.00</option>
                <option value="F" name="high_cgpa">0.00</option>
              </select>
            </p>
            <p>
              <label for="preu"><span>Pre-U:</span></label>
              <select>Certification:

                <option value=""  name="pre_certifcate">STPM</option>
                <option value="" name="pre_certifcate">A-Levels</option>
                <option value="" name="pre_certifcate">SAM/SACE</option>
                <option value="" name="pre_certifcate">CPU</option>
                <option value="" name="pre_certifcate">Others</option>
              </select>
              <select id="preu" name="Degree">
                <option>CGPA</option>
                <option value="A+" name=""pre_cgpa>4.00</option>
                <option value="A"name="pre_cgpa">3.75</option>
                <option value="A-"name="pre_cgpa">3.50</option>
                <option value="B+"name="pre_cgpa">3.25</option>
                <option value="B"name="pre_cgpa">3.00</option>
                <option value="B-" name="pre_cgpa">2.75</option>
                <option value="C+"name="pre_cgpa">2.50</option>
                <option value="C"name="pre_cgpa">2.25</option>
                <option value="C-"name="pre_cgpa">2.00</option>
                <option value="D"name="pre_cgpa">1.50</option>
                <option value="E"name="pre_cgpa">1.00</option>
                <option value="F"name="pre_cgpa">0.00</option>
                <option value="na"name="pre_cgpa">N/A</option>
              </select>

            </p>
            <label for="underDeg"><span>Undergraduate:</span></label>
            <input type="text" id="uniID" name="UniOfX" placeholder="Enter Previous University."><br>
            <label for="underDeg"><span>Course/Subject:</span></label>
            <input type="text" id="courseID" name="course" placeholder="Enter Course">
              <select id="underDeg" name="Degree">
                <option>CGPA</option>
                <option value="A+" name="und_cgpa">4.00</option>
                <option value="A" name="und_cgpa">3.75</option>
                <option value="A-" name="und_cgpa">3.50</option>
                <option value="B+" name="und_cgpa">3.25</option>
                <option value="B" name="und_cgpa">3.00</option>
                <option value="B-" name="und_cgpa">2.75</option>
                <option value="C+" name="und_cgpa">2.50</option>
                <option value="C" name="und_cgpa">2.25</option>
                <option value="C-" name="und_cgpa">2.00</option>
                <option value="D" name="und_cgpa">1.50</option>
                <option value="E" name="und_cgpa">1.00</option>
                <option value="F" name="und_cgpa">0.00</option>
                <option value="na" name="und_cgpa">N/A</option>
              </select>

            </p>
            <p> <button type="submit">Next</button><button type="reset">Clear</button> </p>
        </section>
  </form>
</body>
</html>