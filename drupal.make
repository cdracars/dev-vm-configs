; Core version
; ------------
; Each makefile should begin by declaring the core version of Drupal that all
; projects should be compatible with.

core = 7.x

; API version
; ------------
; Every makefile needs to declare its Drush Make API version. This version of
; drush make uses API version `2`.

api = 2

; Core
projects[drupal][type] = "core"
projects[drupal][version] = "7.32"
; Patches
projects[drupal][patch][] = "http://drupal.org/files/drupal-https-only-961508-23-32.patch"
projects[drupal][patch][] = "http://drupal.org/files/issues/471970_0.patch"

; Profile
; --------
projects[d7_usao_edu][type] = "profile"
projects[d7_usao_edu][download][type] = "git"
projects[d7_usao_edu][download][url] = "git://github.com/cdracars/d7_usao_edu.git"
