

<div class="sidebar-locations sidebar-widget">

    <div class="sidebar-title">Location</div>

    <div class="contact-address" itemscope="" itemtype="http://schema.org/Dentist">

        <strong itemprop="name">Whiteville Family & Cosmetic Dentistry</strong>

        <address itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">904 Spivey Rd</span><br/>
            <span itemprop="addressLocality">Whiteville</span>, <span itemprop="addressRegion">NC</span> <span itemprop="postalCode">28472</span><br/>
        </address>

        <span itemprop="telephone">Phone: (910) 642-6500</strong></span>
        <?php if(get_field('location_fax')): ?>
        <br/><span itemprop="fax">Fax: <strong><?php the_field('location_fax') ?></strong></span><br/>
        <?php endif ?>

        <a class="directions" href="https://goo.gl/maps/nLJL2U6eueANfY1e8" target="_blank">Directions</a>
        <a class="office-hours" data-toggle="modal" data-target="#office-hours">Office Hours</a>

        <!-- Modal -->
        <div class="modal fade" id="office-hours" tabindex="-1" role="dialog" aria-labelledby="officeHours" aria-hidden="true">

          <div class="modal-dialog" role="document">

            <div class="modal-content">

              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Office Hours</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

              </div>

              <div class="modal-body">
                <div class="opening-hours" itemscope="" itemtype="http://schema.org/Dentist">

                  <table>
                    <tbody>
                      <tr itemprop="openingHoursSpecification" itemtype="http://schema.org/OpeningHoursSpecification">
                          <td class="day">Monday</td>
                          <td class="time"><span itemprop="openingHours">8:00am - 5:00pm</span></td>
                      </tr>

                      <tr itemprop="openingHoursSpecification" itemtype="http://schema.org/OpeningHoursSpecification">
                          <td class="day">Tuesday</td>
                          <td class="time"><span itemprop="openingHours">8:00am - 5:00pm</span></td>
                      </tr>

                      <tr itemprop="openingHoursSpecification" itemtype="http://schema.org/OpeningHoursSpecification">
                          <td class="day">Wednesday</td>
                          <td class="time"><span itemprop="openingHours">8:00am - 5:00pm</span></td>
                      </tr>

                      <tr itemprop="openingHoursSpecification" itemtype="http://schema.org/OpeningHoursSpecification">
                          <td class="day">Thursday</td>
                          <td class="time"><span itemprop="openingHours">7:30am - 1:00pm</span></td>
                      </tr>

                    </tbody>
                  </table>

                </div>  
                            
              </div>

            </div>

          </div>

        </div>

    </div>

    <div class="contact-map">

        <a href="https://goo.gl/maps/nLJL2U6eueANfY1e8" target="_blank">

            <img src="<?php the_field('location_map') ?>" alt="<?php the_field('location_firm_name') ?> location"/>

        </a>

    </div>

</div>