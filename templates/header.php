<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">CV Builder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" >Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" >Contact</a>
      </li>
    </ul>
      <button class="btn btn-outline-primary my-2 my-sm-0"  id="buildCVbtn" data-toggle="modal" data-target=".exampleModal-modal-xl" type="button">Create CV</button>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade exampleModal-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Build Your CV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#">
          <div class="form-group">
            <label for="">Full Name</label>
            <input type="text" placeholder="Jonh Doe" id="fullName" class="form-control" required>
          </div>

           <div class="form-group">
            <label for="">Address</label>
            <input type="text" placeholder="2276  Little Acres Lane, Wadena, MN, 56482" id="fullAddress" class="form-control" required>
          </div>

           <div class="form-group">
            <label for="">E-Mail</label>
            <input type="text" placeholder="jonhdoe@gmail.com" id="contactEmail" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="">Bio</label>
            <textarea type="text" placeholder="About Me..." id="aboutMe" class="form-control" required></textarea>
          </div>

          <div class="form-group">
            <label for="">Experience</label>
            <div id="displayExperiences" class="text-center">
              <p>There is no Experiences, Yet!</p>
            </div>
            <button type="button" class="btn btn-success btn-block" onclick="createExpElemetns();">Add an Experience</button>
          </div>

          <div class="form-group">
            <label for="">Education</label>

            <textarea type="text" placeholder="About Me..." id="myEducation" class="form-control" required></textarea>
          </div>

          <div class="form-group">
            <label for="">Skills</label>
            <textarea type="text" placeholder="About Me..." id="mySkills" class="form-control" required></textarea>
          </div>

          <div class="form-group">
            <label for="">Interests</label>
            <textarea type="text" placeholder="About Me..." id="myInterests" class="form-control" required></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printCVData();">Save Curriculum</button>
        </form>
      </div>
    </div>
  </div>
</div>