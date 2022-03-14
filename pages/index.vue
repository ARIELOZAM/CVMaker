<template>
  <div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-4" id="printFullName">
              {{ this.props.fullname }}
            </h1>
            <p class="lead" id="printFullAddress">{{ this.props.address }}</p>
            <p>
              <a id="printContactEmail" href="#">{{ this.props.email }}</a>
            </p>
          </div>
          <section id="bio">
            <h2>Biography</h2>
            <hr />
            <div class="contentItems">
              <p id="printBioData" v-html="this.props.bio"></p>
            </div>
          </section>

          <section id="exp">
            <h2>EXPERIENCE</h2>
            <hr />
            <div
              class="contentItems"
              id="printExpData"
              v-for="(myExp, expInx) in myExps"
              :key="expInx"
            >
              <div
                class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5"
              >
                <div class="resume-content">
                  <h3 class="mb-0" id="printExpTitle">{{ myExp.title }}</h3>
                  <div class="subheading mb-3" id="printExpComp">
                    {{ myExp.company }}
                  </div>
                  <p id="printExpACont" v-html="myExp.about">
                    Bring to the table win-win survival strategies to ensure
                    proactive domination. At the end of the day, going forward,
                    a new normal that has evolved from generation X is on the
                    runway heading towards a streamlined cloud solution. User
                    generated content in real-time will have multiple
                    touchpoints for offshoring.
                  </p>
                </div>
                <div class="resume-date text-md-right">
                  <span class="text-primary" id="printExpDateStart">{{
                    myExp.startDate
                  }}</span>
                  -
                  <span class="text-primary" id="printExpDateEnd">{{
                    myExp.endDate
                  }}</span>
                </div>
              </div>
            </div>
          </section>

          <section id="edu">
            <h2>EDUCATION</h2>
            <hr />
            <div class="contentItems">
              <p id="printEduData">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Mollitia voluptates molestiae corrupti reiciendis earum numquam
                quibusdam explicabo, eligendi et maxime ea quas quaerat nostrum
                temporibus deleniti accusamus a excepturi obcaecati!
              </p>
            </div>
          </section>

          <section id="skill">
            <h2>SKILLS</h2>
            <hr />
            <div class="contentItems">
              <p id="printSkillsData">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Mollitia voluptates molestiae corrupti reiciendis earum numquam
                quibusdam explicabo, eligendi et maxime ea quas quaerat nostrum
                temporibus deleniti accusamus a excepturi obcaecati!
              </p>
            </div>
          </section>

          <section id="int">
            <h2>INTERESTS</h2>
            <hr />
            <div class="contentItems">
              <p id="printIntData">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Mollitia voluptates molestiae corrupti reiciendis earum numquam
                quibusdam explicabo, eligendi et maxime ea quas quaerat nostrum
                temporibus deleniti accusamus a excepturi obcaecati!
              </p>
            </div>
          </section>

          <section id="aww">
            <h2>AWARDS & CERTIFICATIONS</h2>
            <h4>
              <small><em>Web Developer</em></small>
            </h4>
            <hr />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
              deserunt dolorem obcaecati ipsum expedita quo quasi illum saepe
              quam animi alias quos aliquid esse odio, tempore unde enim
              molestiae sint!
            </p>
          </section>

          <h3></h3>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <b-modal id="bv-modal-example">
      <template #modal-title>Build Your CV</template>
      <div class="d-block text-left">
        <form action="#">
          <div class="form-group">
            <label for="">Full Name</label>
            <input
              type="text"
              placeholder="Jonh Doe"
              id="fullName"
              class="form-control"
              required
              v-model="props.fullname"
            />
          </div>

          <div class="form-group">
            <label for="">Address</label>
            <input
              type="text"
              placeholder="2276  Little Acres Lane, Wadena, MN, 56482"
              id="fullAddress"
              class="form-control"
              required
              v-model="props.address"
            />
          </div>

          <div class="form-group">
            <label for="">E-Mail</label>
            <input
              type="text"
              placeholder="jonhdoe@gmail.com"
              id="contactEmail"
              class="form-control"
              required
              v-model="props.email"
            />
          </div>

          <div class="form-group">
            <label for="">Bio</label>
            <textarea
              type="text"
              placeholder="About Me..."
              id="aboutMe"
              class="form-control"
              required
              v-model="props.bio"
            ></textarea>
          </div>

          <div class="form-group">
            <label for="">Experience</label>
            <div
              id="displayExperiences"
              class="text-center"
              v-for="(myExp, expInx) in myExps"
              :key="expInx"
            >
              <div v-if="myExp.length == 0">
                <p>There is no Experiences, Yet!</p>
              </div>

              <div v-else>
                <div class="form-group" id="expFields">
                  <label>Experience</label
                  ><input
                    class="form-control myExperiences"
                    id="myExpTitle"
                    placeholder="Title Name"
                    v-model="myExp.title"
                  /><input
                    class="form-control myExperiencesl"
                    placeholder="Company Name"
                    v-model="myExp.company"
                    id="myExpCorp"
                  /><textarea
                    class="form-control myExperiencesl"
                    placeholder="Tell Us More..."
                    id="myExpCont"
                    v-model="myExp.about"
                  ></textarea
                  ><input
                    class="form-control myExperiences"
                    type="date"
                    id="myExpDateStart"
                    v-model="myExp.startDate"
                  /><input
                    class="form-control myExperiences"
                    type="date"
                    id="myExpDateEnd"
                    v-model="myExp.endDate"
                  />
                </div>
                <button
                  type="button"
                  class="btn btn-danger btn-block"
                  @click="removeExpElement()"
                >
                  Remove Experience
                </button>
              </div>
            </div>
            <button
              type="button"
              class="btn btn-success btn-block my-3"
              @click="addExpElement()"
            >
              Add an Experience
            </button>
          </div>

          <div class="form-group">
            <label for="">Education </label>
            <div
              id="displayExperiences"
              class="text-center"
              v-for="(myEdu, edupInx) in myEdus"
              :key="eduInx"
            >
              <div v-if="myEdu.length == 0">
                <p>There is no Educations, Yet!</p>
              </div>

              <div v-else>
                <div class="form-group" id="expFields">
                  <label>Education</label
                  ><input
                    class="form-control myExperiences"
                    id="myExpTitle"
                    placeholder="Title Name"
                    v-model="myEdu.school"
                  /><input
                    class="form-control myExperiencesl"
                    placeholder="Company Name"
                    v-model="myEdu.degree"
                    id="myExpCorp"
                  /><textarea
                    class="form-control myExperiencesl"
                    placeholder="Tell Us More..."
                    id="myExpCont"
                    v-model="myEdu.about"
                  ></textarea
                  ><input
                    class="form-control myExperiences"
                    type="date"
                    id="myExpDateStart"
                    v-model="myEdu.startDate"
                  /><input
                    class="form-control myExperiences"
                    type="date"
                    id="myExpDateEnd"
                    v-model="myEdu.endDate"
                  />
                </div>

                <button
                  type="button"
                  class="btn btn-danger btn-block"
                  @click="removeEduElement()"
                >
                  Remove Education
                </button>
              </div>
            </div>
            <button
              type="button"
              class="btn btn-success btn-block my-3"
              @click="addEduElement()"
            >
              Add an Education
            </button>
          </div>

          <div class="form-group">
            <label for="">Skills</label>
            <textarea
              type="text"
              placeholder="About Me..."
              id="mySkills"
              class="form-control"
              required
            ></textarea>
          </div>

          <div class="form-group">
            <label for="">Interests</label>
            <textarea
              type="text"
              placeholder="About Me..."
              id="myInterests"
              class="form-control"
              required
            ></textarea>
          </div>
        </form>
      </div>

      <template #modal-footer>
        <div class="w-100">
          <b-button @click="$bvModal.hide('bv-modal-example')"
            >Close Me</b-button
          >
        </div>
      </template>
    </b-modal>
  </div>
</template>
<script>
export default {
  layout: "app",
  data() {
    return {
      props: {
        fullname: "Full Name",
        address: "Full Address",
        email: "admin@email.com",
        bio: "Lorem Ipsum...",
      },

      myExps: [],
      myEdus: [],
      mySkills: [],
      myIntereses: [],
      myAwards: [],
    };
  },
  created() {
    //this.createExpElemetns();
  },
  computed: {},
  methods: {
    addExpElement() {
      this.myExps.push({
        title: "",
        company: "",
        about: "",
        startDate: "",
        endDate: "",
      });
    },

    removeExpElement(index) {
      this.myExps.splice(index, 1); // why is this removing only the last row?
    },

    addEduElement() {
      this.myEdus.push({
        school: "",
        degree: "",
        about: "",
        startDate: "",
        endDate: "",
      });
    },

    removeEduElement(index) {
      this.myEdus.splice(index, 1); // why is this removing only the last row?
    },

    addSkillElement() {
      this.mySkills.push({
        title: "",
        company: "",
        about: "",
        startDate: "",
        endDate: "",
      });
    },

    addInteresElement() {
      this.myInteses.push({
        title: "",
        company: "",
        about: "",
        startDate: "",
        endDate: "",
      });
    },

    addAwardsElement() {
      this.myAwards.push({
        title: "",
        company: "",
        about: "",
        startDate: "",
        endDate: "",
      });
    },
  },
  mounted() {},
};

const $ = require("jquery");
// Lo declaramos globalmente
window.$ = $;
</script>
