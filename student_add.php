<!DOCTYPE html>
<head>
    <title>CAT MARKS DETAILS</title>
    <link rel="stylesheet" href="add_style.css">
</head>
<body>
<form class="reg-form">
   <p class="helper-text">* denotes a required field</p>
   
   <div class="field-row">
      <label class="form-label" for="firstName">First name</label>
      <input type="text" id="firstName" class="field text-field first-name-field" required>
      <span class="message"></span>
   </div>

   <div class="field-row">
      <label class="form-label cf" for="lastName">Last name</label>
      <input type="text" id="lastName" class="field text-field last-name-field" required>
      <span class="message"></span>
   </div>

   <div class="field-row">
      <label class="form-label" for="initials">Father Name</label>
      <input type="text" id="initials" class="field text-field initials-field">
   </div>

   <div class="field-row">
      <label class="form-label" for="dateOfBirth">Date of birth</label>
      <input type="date" id="dateOfBirth" class="field date-field dob-field" min="1900-01-01" max="2023-12-01"  required>
      <span class="message"></span>
   </div>

   <div class="field-row">
      <label class="form-label" for="tel">Tel</label>
      <input type="tel" id="tel" class="field text-field tel-field" required>
      <span class="message"></span>
   </div>

   <div class="field-row">
      <label class="form-label" for="hs">High School Name</label>
      <input type="text" id="hs" class="field text-field hs-field" required>
      <span class="message"></span>
   </div>

   <div class="field-row">
      <label class="form-label" for="tel">Permanent Address</label>
      <input type="tel" id="tel" class="field text-field address-field" required>
      <span class="message"></span>
   </div>

   <div class="field-row">
      <label class="form-label">Your Level</label>
      <select class="form-dropdown field">
         <option value="1st Year"> 1st Year </option>
         <option value="2nd Year"> 2nd Year </option>
         <option value="3rd Year"> 3rd Year </option>
         <option value="4th Year"> 4th Year </option>
         <option value="5th Year"> 5th Year </option>
      </select>
   </div>

   <div class="field-row">
      <label class="form-label" for="email">Email</label>
      <input type="email" id="email" class="field text-field email-field" required>
      <span class="message"></span>
   </div>

   <div class="field-row">
      <label class="form-label"> Degree Program</label>
      <select class="field form-dropdown">
         <option value="BS in Pre-Med Physics"> BS in Pre-Med Physics </option>
         <option value="BS in Physics minor in Economics"> BS in Physics minor in Economics </option>
         <option value="BS in Physics minor in Finance"> BS in Physics minor in Finance </option>
         <option value="BS in Physics with specialization in Material Science"> BS in Physics with specialization in Material Science </option>
         <option value="BS in Physics with specialization in Medical Instrumentation"> BS in Physics with specialization in Medical Instrumentation </option>
         <option value="MS in Physics"> MS in Physics </option>
         <option value="PhD in Physics"> PhD in Physics </option>
      </select>
   </div>

   <div class="field-row">
      <label class="form-label"></label>
      <button class="form-button">Register</button>
   </div>
   
</form>
</body>
</html>