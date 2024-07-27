<style>
    /* Add your custom styles here */
    body {
            font-family:Verdana, Geneva, Tahoma, sans-serif;

        }
   .facilty{
 background-image:linear-gradient(rgb(75, 234, 245),#1dd3dad3);
  background-size: cover;
  background-position: center;

} */
    .card-body{
      margin-bottom: 20px;
      padding: 15px;
      /* background-image:linear-gradient(rgba(13, 148, 153, 0.589),#0f2469fd)         */
      background-color: #3498db;
    }

    .circular-image {
      border-radius: 50%;
      overflow: hidden;
      width: 130px; /* Adjust the size as needed */
      height: 130px; /* Adjust the size as needed */
    }



    .card:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transform: scale(1.05);
    }
    .img{
        height: 100px;
        width: 100px;

    }

    .faculty-card {
            border-top-right-radius: 15px;
            border-bottom-left-radius: 15px;
            border-top-left-radius:50px;
            border-bottom-right-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 300px;
            width: 100%;
            transition: transform 0.3s;
            display: block;
            margin: auto;
    }
    .faculty-card1 {
            border-top-right-radius: 50px;
            border-bottom-left-radius: 24px;
            border-top-left-radius:50px;
            border-bottom-right-radius: 24px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
            background-color: #138ad8
            overflow: hidden;
            max-width: 330px;
            transition: transform 0.3s;
            display: block;
            margin: auto;
        }

        .faculty-card:hover {
            transform: scale(1.05);
        }
        .faculty-card1:hover {
            transform: scale(1.05);
        }

        /* .faculty-card img {
         width: 100%;
        height: 100%;
        object-fit: contain;
        } */

        .faculty-card-content {
            padding: 20px;
        }

        .faculty-card h2 {
            margin-bottom: 10px;
            color: #333;
        }
        .faculty-card h3{
            margin-bottom: 10px;
            color: #333;
        }

        .faculty-card p {
            color: #777;
            margin-bottom: 5px;
        }

        .faculty-card a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
        h5{
            color: rgb(8, 145, 54);
        }
        .head{
        background-color: #3498db;
        text-align: center;
        color: #fff;
        font-family: Georgia, 'Times New Roman', Times, serif;
        border-radius: 10px;

        }
        .icon{
          height: 2.5rem;
    width: 2.5rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    border-radius:rgb(192, 19, 19);

        }
        .icon:hover{
          font-size:x-large;
          color: rgb(0, 0, 0);
        }
        .icon1{
          font-size:x-large;
          color: rgb(238, 223, 223);

        }
        .icon1:hover{
          font-size:x-large;
          color: rgb(12, 171, 177);
        }
        .icon2{
          font-size:x-large;
          color: rgb(0, 0, 0);

        }
        .icon2:hover{
          font-size:x-large;
          color: rgb(12, 171, 177);
        }
  .circular{
    margin-bottom: 3rem;
    text-align: center;
    transition: transform 0.3s;
       }

       .circular:hover {
            transform: scale(1.05);
        }

        .imgslide{

            height: 400px;
            width: 300px;
            border-radius: 24px;

}
.custom-box {

box-shadow: 5px 5px 10px #07b9b3;
}
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 390px;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;

}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
.faculty-custom{
    height: 250px;
    width: 220px;
    transition: transform 0.4s;
  }
  .img-fluid-custom{
  width: 100%;

  aspect-ratio: 3/2;
  object-fit: contain;
  transition: transform 0.4s;
}
img.card-img-top  {
    background-color: rgb(210, 208, 208)


}

  </style>
