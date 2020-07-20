### Jalali Datapicker For ACF (Advanced Custom Fields) WordPress Plugin

- This Plugin Compatible With [wp-parsidate](https://fa.wordpress.org/plugins/wp-parsidate/) And [ACF](https://wordpress.org/plugins/advanced-custom-fields/) version>5.0.0 WordPress Plugin.
- For use persian dateicker value in Custom Query, you can use post meta or user meta:

##### {acf_field_name} -> jalali date
##### {acf_field_name}-timestamp -> Timestamp
##### {acf_field_name}-date -> Grogorian date

For example acf field name is `delivery`:

```
get_post_meta($post_id, 'delivery', true);
get_post_meta($post_id, 'delivery-timestamp', true);
get_post_meta($post_id, 'delivery-date', true);
```

```
get_user_meta($user_id, 'delivery', true);
get_user_meta($user_id, 'delivery-timestamp', true);
get_user_meta($user_id, 'delivery-date', true);
```


---

![افزونه تاریخ شمسی برای ACF](https://raw.githubusercontent.com/mehrshaddarzi/acf-persian-datepicker/master/screenshot.jpg)
