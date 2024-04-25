<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $numero
 * @property string $dateAvis
 * @property int $montant
 * @property string $libelle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|avisBureau newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|avisBureau newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|avisBureau query()
 * @method static \Illuminate\Database\Eloquent\Builder|avisBureau whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|avisBureau whereDateAvis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|avisBureau whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|avisBureau whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|avisBureau whereMontant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|avisBureau whereNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|avisBureau whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperavisBureau {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|deliberation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|deliberation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|deliberation query()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperdeliberation {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $nom
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|entreprise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|entreprise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|entreprise query()
 * @method static \Illuminate\Database\Eloquent\Builder|entreprise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|entreprise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|entreprise whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|entreprise whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperentreprise {}
}

