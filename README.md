# 용인환경정의

<http://yongin.eco.or.kr>

용인환경정의는 환경운동을 하는 시민단체입니다.
용인환경정의는 지역발전이라는 이름으로 더 이상 난개발이 되지 않도록 하고, 생명존중과 자유확대, 신뢰사회를 위해 시민들과 함께 합니다.

## 2018년 8월 업그레이드

[드루팔 컴포저 프로젝트](https://github.com/drupal-composer/drupal-project) - [보안강박 버전](https://github.com/drupal-composer/drupal-paranoia) 기반으로 새로 시작합니다. 기존 데이터베이스에서 정리하지 않은 것들도 이참에 함께 정리합니다.

```
$ drush sql-query "DELETE FROM key_value WHERE collection='system.schema' AND name='migrate_wordpress';"
$ drush updb -y
$ drush pm:uninstall migrate -y
$ drush entity:updates -y
$ drush -y pmu google_analytics
```
