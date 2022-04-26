<style>
body {
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }


.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #4A64B8;
  color:white;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.product-title{
  font-weight: bold; }

.product-title, .rating, .product-description, .price{
  margin-bottom: 15px;
  text-align: justify; }

.product-title {
  margin-top: 0; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

            @import url("https://fonts.googleapis.com/css?family=Poppins:400,400i,700");

div.c{
  position: relative;
  margin:2em;
  width: 75%;
}
.input1{
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  opacity:0;
  visibility: 0;
}
h1{
  background: #4A64B8;
  color:white;
  padding:1em;
  position: relative;
  font-size: 18px;
}
label::before{
  content:"";
  display: inline-block;
  border: 15px solid transparent;
  border-left:20px solid white;
}
label{
  cursor: pointer;
  position: relative;
  display: flex;
  align-items: center;
}
div.p{
  max-height:0px;
  overflow: hidden;
  transition:max-height 0.5s;
  background-color: white;
  box-shadow:0 0 10px 0 rgba(0, 0, 0, 0.2);
}
div.p p {
  padding:2em;
}
input:checked ~ h1 label::before{
  border-left:15px solid transparent;
  border-top:20px solid white;
  margin-top:12px;
  margin-right:10px;
}
input:checked ~ h1 ~ div.p{
  max-height:100px;
}
a{
  color:steelblue;
}

</style>