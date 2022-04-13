@import url("https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@800&display=swap");
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");

/*--------------------------------------------------------------
# COMMON and UTILITIES
--------------------------------------------------------------*/
body {
  color: #24292d;
  min-height: 100vh;
  /* TODO: remove below code if it breaks pages */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.brand-font {
  font-family: "M PLUS Rounded 1c", sans-serif;
}

.z-index-n1 {
  z-index: -1 !important;
}

#scrollTopBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #53b467;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
  transition: ease-in 0.2s;
}

#scrollTopBtn:hover {
  background-color: #ffd972;
  color: white;
}

#scrollTopBtn > i {
  color: rgb(49, 42, 42);
}

img {
  max-width: 100%;
}

.icon-md {
  width: 2.6rem;
  height: 2.6rem;
  line-height: 2.6rem;
  text-align: center;
  font-size: 1.7rem;
}

.vstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-item-align: stretch;
  align-self: stretch;
}

.card {
  border: 0 solid rgba(0, 0, 0, 0.1);
  border-radius: 0.5rem;
}

.badge:hover {
  color: #fff;
}

/*--------------------------------------------------------------
# NAVBAR
--------------------------------------------------------------*/
.navbar {
  border-bottom: #ebebeb 1px solid;
}

.navbar-brand-logo {
  max-height: 30px;
}

.navbar-brand-text {
  font-family: "M PLUS Rounded 1c", sans-serif;
}

.nav-link {
  font-weight: 500;
  transition: ease-in 0.3s;
}

.nav-link.active {
  color: #53b467 !important;
}

.avatar {
  height: 3rem;
  width: 3rem;
  position: relative;
  display: inline-block !important;
  object-fit: cover;
}

.avatar-sm {
  height: 2.5rem;
  width: 2.5rem;
}

.avatar-img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}

/*--------------------------------------------------------------
# BUTTONS and BACKGROUNDS
--------------------------------------------------------------*/
.btn {
  font-weight: 600;
}

.btn-lg,
.btn-group-lg > .btn {
  padding: 0.8rem 1.5rem;
  font-size: 1rem;
  border-radius: 0.5rem;
}

.btn-primary-soft,
.bg-primary-soft {
  color: #53b467;
  background-color: #f6f9f5;
}

.btn-primary-soft:hover {
  background-color: #f6f9f5;
  color: #fff;
}

.bg-primary-soft-hover:hover {
  background-color: #f6f9f5;
  color: #53b467;
}

.btn-danger-soft,
.bg-danger-soft {
  color: #d6293e;
  background-color: rgba(214, 41, 62, 0.1);
}

.btn-danger-soft:hover {
  background-color: #d6293e;
  color: #fff;
}

.bg-danger-soft:hover {
  background-color: #d6293e;
  color: rgba(214, 41, 62, 0.1);
}

.bg-danger-soft-hover:hover {
  color: #d6293e;
  background-color: rgba(214, 41, 62, 0.1);
}

.bg-primary-light {
  background-color: #f6f9f5;
}

.bg-primary-dark {
  background-color: #11220b;
}

.fill-warning {
  fill: #ffd972 !important;
}

.fill-orange {
  fill: #eb9a57 !important;
}

.fill-blue {
  fill: #066ac9 !important;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
