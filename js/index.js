function printCVData() {
var myExps = ["title", "comp", "about", "date"];
var myExpTitle = myExps["0"];
  var dataCV = {
    fullName:document.getElementById("fullName").value,
    fullAddress:document.getElementById("fullAddress").value,
    contactEmail:document.getElementById("contactEmail").value,
    aboutMe:document.getElementById("aboutMe").value,
    myExperience: {
    positionTitle:document.getElementById("myExpTitle").value,
    companyName:document.getElementById("myExpCorp").value,
    aboutWork:document.getElementById("myExpCont").value,
    dateStart:document.getElementById("myExpDateStart").value,
    dateEnd:document.getElementById("myExpDateEnd").value,
  },
    myEducation:document.getElementById("myEducation").value,
    mySkills:document.getElementById("mySkills").value,
    myInterests:document.getElementById("myInterests").value
  };
  var dataCVMyExps = {
    positionTitle:document.getElementById("myExpTitle").value,
    companyName:document.getElementById("myExpCorp").value,
    aboutWork:document.getElementById("myExpCont").value,
    dateStart:document.getElementById("myExpDateStart").value,
    dateEnd:document.getElementById("myExpDateEnd").value,
  }

  document.getElementById("buildCVbtn").innerHTML = "Edit CV";
  document.getElementById("printFullName").innerHTML = dataCV.fullName;
  document.getElementById("printFullAddress").innerHTML = dataCV.fullAddress;
  document.getElementById("printContactEmail").setAttribute("href", "mailto:" + dataCV.contactEmail);
  document.getElementById("printContactEmail").innerHTML = dataCV.contactEmail;
  document.getElementById("printBioData").innerHTML = dataCV.aboutMe;
  document.getElementById("printExpData").innerHTML = dataCV.myExperience;
  document.getElementById("printExpTitle").innerHTML = dataCVMyExps.myExpTitle;
  document.getElementById("printExpCorp").innerHTML = dataCVMyExps.myExpCorp;
  document.getElementById("printExpCont").innerHTML = dataCVMyExps.myExpCont;
  document.getElementById("printExpDateStart").innerHTML = dataCVMyExps.myExpDateStart;
  document.getElementById("printExpDataEnd").innerHTML = dataCVMyExps.myExpDateEnd;
  document.getElementById("printEduData").innerHTML = dataCV.myEducation;
  document.getElementById("printSkillsData").innerHTML = dataCV.mySkills;
  document.getElementById("printIntData").innerHTML = dataCV.myInterests;
}

function createExpElemetns() {
  var formGroupExp = document.createElement("div");
  var labelTitleExp = document.createElement("label");
  var i;
  var ramdomExp = "";
     for (i=0; i<11; i++) {
       ramdomExp + "#" + i;
     }
  var createLabelTitleExp = document.createTextNode("Experience" + ramdomExp);
  var titleExp = document.createElement("input");
  var corpNameExp = document.createElement("input");
  var contentExp = document.createElement("textarea");
  var dateInfoStart = document.createElement("input");
  var dateInfoEnd = document.createElement("input");
  var caracteres = "0123456789";
       var ramdomID = "";
       for (i=0; i<3; i++) ramdomID +=caracteres.charAt(Math.floor(Math.random()*caracteres.length)); 
  document.getElementById("displayExperiences").appendChild(formGroupExp);
  formGroupExp.setAttribute("class", "form-group");
   formGroupExp.setAttribute("id", ramdomID);
  formGroupExp.appendChild(labelTitleExp);
  labelTitleExp.appendChild(createLabelTitleExp);
  formGroupExp.appendChild(titleExp);
  formGroupExp.appendChild(corpNameExp);
  formGroupExp.appendChild(contentExp);
  formGroupExp.appendChild(dateInfoStart);
  formGroupExp.appendChild(dateInfoEnd);
  titleExp.setAttribute("class", "form-control");
  titleExp.setAttribute("id", "myExpTitle");
  titleExp.setAttribute("placeholder", "Title Name");
  corpNameExp.setAttribute("class", "form-control");
  corpNameExp.setAttribute("placeholder", "Company Name");
  corpNameExp.setAttribute("id", "myExpCorp");
  contentExp.setAttribute("class", "form-control");
  contentExp.setAttribute("placeholder", "Tell Us More...");
  contentExp.setAttribute("id", "myExpCont");
  dateInfoStart.setAttribute("class", "form-control");
  dateInfoStart.setAttribute("type", "date");
  dateInfoStart.setAttribute("id", "myExpDateStart");
  dateInfoEnd.setAttribute("class", "form-control");
  dateInfoEnd.setAttribute("type", "date");
  dateInfoEnd.setAttribute("id", "myExpDateEnd");
  
    }