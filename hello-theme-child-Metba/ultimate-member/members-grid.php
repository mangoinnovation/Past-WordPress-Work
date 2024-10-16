<?php
/**
 * Template for the members directory grid
 *
 * This template can be overridden by copying it to yourtheme/ultimate-member/members-grid.php
 *
 * Page: "Members"
 *
 * @version 2.6.1
 *
 * @var array  $args
 * @var bool   $cover_photos
 * @var bool   $profile_photo
 * @var bool   $show_name
 * @var bool   $show_tagline
 * @var bool   $show_userinfo
 * @var bool   $userinfo_animate
 * @var bool   $show_social
 * @var array  $reveal_fields
 * @var string $no_users
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$unique_hash = substr( md5( $args['form_id'] ), 10, 5 ); ?>



<script type="text/template" id="tmpl-um-member-grid-<?php echo esc_attr( $unique_hash ) ?>">

    <div class="um-members row gx-5">
        <div class="um-gutter-sizer"></div>

        <# if ( data.length > 0 ) { #>
        <# _.each( data, function( user, key, list ) { #>

        <div id="um-member-{{{user.card_anchor}}}-<?php echo esc_attr( $unique_hash ) ?>" class="um-member um-role-{{{user.role}}} {{{user.account_status}}} <?php if ( $cover_photos ) { echo 'with-cover'; } ?> col-md-6 border-0">
            <div class="col-12 gx-5">

            <?php if ( $cover_photos ) { ?>
                <div class="um-member-cover" data-ratio="<?php echo esc_attr( UM()->options()->get( 'profile_cover_ratio' ) ); ?>">
                    <div class="um-member-cover-e">
                        <a href="{{{user.profile_url}}}" title="<# if ( user.display_name ) { #>{{{user.display_name}}}<# } #>">
                            {{{user.cover_photo}}}
                        </a>
                    </div>
                </div>
            <?php }

            if ( $profile_photo ) { ?>
                <div class="um-member-photo radius-<?php echo esc_attr( UM()->options()->get( 'profile_photocorner' ) ); ?>">
                    <a href="{{{user.profile_url}}}" title="<# if ( user.display_name ) { #>{{{user.display_name}}}<# } #>">
                        {{{user.avatar}}}
                        <?php do_action( 'um_members_in_profile_photo_tmpl', $args ); ?>
                    </a>
                </div>
            <?php } ?>


            <div class="um-member-card <?php if ( ! $profile_photo ) { echo 'no-photo'; } ?>">
                <?php if ( $show_name ) { ?>
                    <# if ( user.display_name_html ) { #>
                    <div class="um-member-name mb-3">
                        <span class="um-name-label-1">Name</span>
                        <span class="um-name-1">{{{user.display_name_html}}}</span>
                    </div>
                    <# } #>
                <?php }

                // please use for buttons priority > 100
                do_action( 'um_members_just_after_name_tmpl', $args ); ?>
                {{{user.hook_just_after_name}}}


                <# if ( user.can_edit ) { #>
                <div class="um-members-edit-btn">
                    <a href="{{{user.edit_profile_url}}}" class="um-edit-profile-btn um-button um-alt">
                        <?php _e( 'Edit profile','ultimate-member' ) ?>
                    </a>
                </div>
                <# } #>


                <?php do_action( 'um_members_after_user_name_tmpl', $args ); ?>
                {{{user.hook_after_user_name}}}


                <?php if ( $show_tagline && ! empty( $tagline_fields ) && is_array( $tagline_fields ) ) {


                    foreach ( $tagline_fields as $key ) {
                        if ( empty( $key ) ) {
                            continue;
                        }

                        // Get the label for the current custom field
                        $field_label = isset( $fields[ $key ]['title'] ) ? $fields[ $key ]['title'] : $key;
                        ?>


                        <# if ( typeof user['<?php echo $key; ?>'] !== 'undefined' ) { #>
                        <div class="um-member-tagline um-member-tagline-<?php echo esc_attr( $key ); ?>"
                             data-key="<?php echo esc_attr( $key ); ?>">

                            <!-- Display the label of the custom field -->
                            <span class="pe-3"><?php echo esc_html( $field_label ); ?></span>
                            <!-- Display the value of the custom field -->
                            {{{user['<?php echo $key; ?>']}}}

                        </div>
                        <# } #>

                    <?php }
                }

                if ( $show_userinfo ) { ?>

                    <# var $show_block = false; #>

                    <?php foreach ( $reveal_fields as $k => $key ) {
                        if ( empty( $key ) ) {
                            unset( $reveal_fields[ $k ] );
                        } ?>
                        <# if ( typeof user['<?php echo $key; ?>'] !== 'undefined' ) {
                        $show_block = true;
                        } #>
                    <?php }

                    if ( $show_social ) { ?>
                        <# if ( ! $show_block ) { #>
                        <# $show_block = user.social_urls #>
                        <# } #>
                    <?php } ?>

                    <# if ( $show_block ) { #>
                    <div class="um-member-meta-main">

                        <?php if ( $userinfo_animate ) { ?>
                            <div class="um-member-more">
                                <a href="javascript:void(0);"><i class="um-faicon-angle-down"></i></a>
                            </div>
                        <?php } ?>

                        <div class="um-member-meta <?php if ( ! $userinfo_animate ) { echo 'no-animate'; } ?>">

                            <?php foreach ( $reveal_fields as $key ) { ?>

                                <# if ( typeof user['<?php echo $key; ?>'] !== 'undefined' ) { #>
                                <div class="um-member-metaline um-member-metaline-<?php echo $key; ?>">
                                    <span class="um-custom-f-label-1">{{{user['label_<?php echo $key;?>']}}}</span> <span class="um-custom-f-1"> {{{user['<?php echo $key;?>']}}}</span>
                                </div>
                                <# } #>

                            <?php }

                            if ( $show_social ) { ?>
                                <div class="um-member-connect">
                                    {{{user.social_urls}}}
                                </div>
                            <?php } ?>
                        </div>

                        <?php if ( $userinfo_animate ) { ?>
                            <div class="um-member-less">
                                <a href="javascript:void(0);"><i class="um-faicon-angle-up"></i></a>
                            </div>
                        <?php } ?>

                        <button type="button" class="btn btn-primary userModal-btn  mt-4" data-bs-toggle="modal" data-bs-target="#userModal-{{{user.card_anchor}}}">
                            View Profile
                        </button>

                        <div class="modal userModal fade" id="userModal-{{{user.card_anchor}}}" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog  modal-xl">
                                <div class="modal-content userModalContent">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn p-4" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-x"></i></button>
                                    </div>
                                    <div class="modal-body p-4">

                                        <div class="row">
                                            <div class="col-md-6 col-lg-4 pb-4">


                                                <!-- Profile Picture -->
                                                <div class="um-member-photo d-flex  justify-content-center radius-<?php echo esc_attr( UM()->options()->get( 'profile_photocorner' ) ); ?>">
                                                    <a href="{{{user.profile_url}}}" title="<# if ( user.display_name ) { #>{{{user.display_name}}}<# } #>">
                                                        {{{user.avatar}}}
                                                        <?php do_action( 'um_members_in_profile_photo_tmpl', $args ); ?>
                                                    </a>
                                                </div>

                                                <!-- Custom Fields -->
                                                <div class="user-custom-fields text-center">

                                                    <# if ( user.display_name_html ) { #>
                                                    <div class="um-member-name justify-content-center">
                                                        <span class="um-name-label-1">Name</span>
                                                        <span class="um-name-1">{{{user.display_name_html}}}</span>
                                                    </div>
                                                    <# } #>


                                                    <?php foreach ( $reveal_fields as $key ) { ?>

                                                        <# if ( typeof user['<?php echo $key; ?>'] !== 'undefined' ) { #>
                                                        <div class="um-member-metaline um-member-metaline-<?php echo $key; ?>">
                                                            <strong class="um-custom-f-label">{{{user['label_<?php echo $key;?>']}}}</strong> <span class="um-custom-f"> {{{user['<?php echo $key;?>']}}}</span>
                                                        </div>
                                                        <# } #>
                                                    <?php } ?>


                                                </div>



                                            </div>
                                            <div class="col-md-6 col-lg-8">
                                                <?php
                                                $description_key = 'description'; // Assuming 'description' is the key for the bio field

                                                // Check if 'description' is in the $reveal_fields array
                                                if (in_array($description_key,  $tagline_fields)) {
                                                    ?>
                                                    <div class="about-user">
                                                        <h5 class="modal-header-contet">About</h5>
                                                        <# if ( typeof user['<?php echo $description_key; ?>'] !== 'undefined' ) { #>
                                                        <div class="um-member-metaline um-about um-member-metaline-<?php echo $description_key; ?>">
                                                           {{{user['<?php echo $description_key; ?>']}}}
                                                        </div>
                                                        <# } else { #>
                                                        <p class="um-about">No bio available.</p>
                                                        <# } #>
                                                    </div>
                                                    <?php
                                                }
                                                ?>




                                            </div>


                                        </div>

                                    </div>
                                    <div class="modal-footer border-0">

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <# } #>
                <?php } ?>

            </div>
            </div>
        </div>

        <# }); #>
        <# } else { #>

        <div class="um-members-none">
            <p><?php echo $no_users; ?></p>
        </div>

        <# } #>

        <div class="um-clear"></div>
    </div>
</script>
