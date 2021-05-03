     <h1>LOST API Character display - Acates Media</h1>
     <template>
       <div class="bg" style="background-image: url(css/bg/the-island.jpg)">
         <div class="lost"> <img src="/css/bg/logo-transparent.png" /> </div>
         <p>>: The survivors of a plane crash work together in order to survive on a seemingly deserted tropical island.
         <br/>
         <br/>
           Creators: J.J. Abrams, Jeffrey Lieber, Damon Lindelof</p>
         <div v-for="(actors, data) in apiData">
           <ul>
             <li v-for="character in actors">
               <vue-flip height='300' width='300' active-click="true">
                 <template slot="front">
                   <h1> {{character.name}} </h1>
                   <div class="img"> <img v-bind:src="character.image" /> </div>
                 </template>
                 <template slot="back">
                   <h1> {{character.role}} </h1>
                   <div class="img"> <img v-bind:src="'/flip/' + character.image" /> </div>
                 </template>
               </vue-flip>
             </li>
           </ul>
         </div>

         <div class="dharma"> <img src="/css/bg/dharma-logo.png" /> </div>
       </div>
     </template>
     <script>
       import VueFlip from 'vue-flip';
       export default {
         name: 'Main',
         components: {
           'vue-flip': VueFlip,
         },
         props: {
           apiData: {
             type: Array,
             required: true
           }
         }
       }

     </script>
     <style>
       @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

       .bg {
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
       }

       h1, p {
         font-family: 'Josefin Sans', sans-serif;
         font-weight: bold;
         font-size: 1.5em;
         text-transform: uppercase;
       }

       p {
        color: #49503d;
        font-size: 1em;
        padding: 3%;
        padding-bottom: .1% !important;
        cursor: pointer;
       }

       img {
         width: 90%;
         height: auto;
         text-align: center;
         margin: 0 auto;
         user-drag: false;
         border-radius: 5%;
         cursor: pointer;
       }

       .lost,
       .dharma {
         width: 100%;
         text-align: center;
       }

       .lost img,
       .dharma img {
         position: relative;
       }

       .lost img {
         width: 10em !important;
       }

       .dharma img {
         width: 6em !important;
         padding: 1%;
       }

       .dharma {
         display: block;
         overflow: hidden;
         text-align: center;
       }

       .dharma:before,
       .dharma:after {
         content: "";
         display: inline-block;
         vertical-align: middle;
         position: relative;
         width: 30%;
         border-top-style: solid;
         border-top-width: 1px;
         color: white;
       }

       .dharma:before {
         right: 0.5em;
         margin-left: -50%;
       }

       .dharma:after {
         left: 0.5em;
         margin-right: -50%;
       }

       .dharma img {
         vertical-align: middle;
       }

       ul {
         list-style: none;
         text-align: center;
       }

       li {
         display: inline !important;
         font-family: Verdana, Geneva, sans-serif;
         font-size: .8em;
       }

       .flip-container {
         display: inline-block;
         padding: 2%;
         text-align: center;
       }

       .flipper {
         width: 300px;
         height: 450px;
         cursor: pointer;
       }

       .front,
       .back {
         display: flex;
         align-items: center;
         justify-content: center;
         border-radius: 5px;
         box-shadow: 0px 10px 10px #999;
         background: #40404038;
         color: black;
         border-radius: 10%;
         width: 300px;
         height: 450px;
         overflow-y: hidden;
         /* position: absolute; */
         /* top: 1%; */
         /* left: 0; */
         display: block;
       }

     </style>
