<?php
// Class declaration.
class Article {
  /**
   * Properties (with default values.)
   */
  // PUBLIC means it can be overwritten OUTSIDE of what's in the class methods.
  public $id  = 0;
  public $title = '';
  public $content  = '';
  /**
   * Methods.
   */
  // __construct executes each time we make a new instance of this class (a new object.)
  function __construct ( $id = 0, $title = 'Unknown Tilte', $type = 'Unknown Content' )
  {
    if ( is_float( $id ) && !empty( $id ) )
      $this->id = $id;
    if ( is_string( $price ) && !empty( $price ) )
      $this->price = $price;
    if ( is_string( $type ) && !empty( $type ) )
      $this->type = $type;
  }
  // Outputs an article.
  public function output ( $echo = TRUE )
  {
    $output = '';
    ob_start(); // Begins an output buffer.
    ?>
      <dl>
        <dt>ID</dt>
        <dd><?php echo $this->id; ?></dd>
        <dt>Title</dt>
        <dd><?php echo $this->Title; ?></dd>
        <dt>Type</dt>
        <dd><?php echo $this->type; ?></dd>
      </dl>
    <?php // ob_get_clean() clears the output buffer, and returns what the string was.
    $output = ob_get_clean(); // We now have the buffered (echo'd) string contents saved in a variable.
    if ( $echo === TRUE ) echo $output; // Output, if our argument tells us to.
    return $output; // Return the string.
  }
}