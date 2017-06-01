class config {
  constructor() {
    this.sb_bg = "sidebar-6.1.jpg";
    this.sb_color = "blue";

    document.cookie = 'sb_bg =  sidebar-6.1.jpg';
    document.cookie = 'sb_color = blue';
  }

  bg_change(bg){
    this.sb_bg = bg;
    document.cookie = 'sb_bg = '+bg;
  }

  color_change(color){
    this.sb_color = color;
    document.cookie = 'sb_color = '+color;
  }
}
