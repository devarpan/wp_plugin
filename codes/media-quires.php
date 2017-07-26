/* Media queries used on blog.staydecent.ca by Adrian Unger 
   check my full source at:
   http://blog.staydecent.ca/static/css/style-0.1.6.css */
@media only screen and (min-width:768px) and (max-width:1269px) {
    /* In my particular design, I used a fluid grid limited to a 
       max-width of 1140px, while (if there is enough room)
       pushing the menu outside of layout, requiring a total
       limit of at least 1270px. 
       So, this first query applies to any screen-width less
       than 1270px, and adapts accordingly. */
}
@media only screen and (min-width:768px) and (max-width:959px) {
    /* Here is where I adjust for Ipad's and similar screen
       widths. Note that the above query and this one overlap
       meaning any rules above will also apply. */
}
@media only screen and (min-width:0px) and (max-width:767px) {
   /* As soon as we fall below the Ipad's width I use my 'mobile'
      design. So, everything in this query is meant for 
      smartphones and other small screens. */
}

/* A popular grid size used is 960px. Skeleton, a new Boilerplate
   for Responsive, mobile-friendly development, is based on that.
   http://www.getskeleton.com/src/stylesheets/skeleton.css */
@media only screen and (min-width: 768px) and (max-width: 959px) {
    /* Here, Skeleton sets the rules for anything less than 960px
       and at least the size of the Ipad screen. */
}
@media only screen and (max-width: 767px) {
    /* Here, rules for anything less than Ipads width, with the
       advice to design for the smallest common width, 320px.
       This is the majority of smarthphones. */
}
@media only screen and (min-width: 480px) and (max-width: 767px) {
    /* This is for any screen less than Ipad's width and at least
       480px. This covers a many large-screened smartphones. It
       is declared after the above rule so it overrides the rules
       meant for 320px. */
}