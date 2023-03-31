<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $industry_id
 * @property-read \App\Models\Industry $industry
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubCategory> $sub_categories
 * @property-read int|null $sub_categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category active()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Chat
 *
 * @property int $id
 * @property string|null $name
 * @property string $uuid
 * @property mixed|null $settings
 * @property int|null $job_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $workspace_id
 * @property-read \App\Models\Job|null $job
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Message> $messages
 * @property-read int|null $messages_count
 * @property-read \App\Models\ChatParticipant|null $participant
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ChatParticipant> $participants
 * @property-read int|null $participants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Usage> $usages
 * @property-read int|null $usages_count
 * @property-read \App\Models\User|null $user
 * @property-read \App\Models\Workspace|null $workspace
 * @method static \Illuminate\Database\Eloquent\Builder|Chat active()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat forJob()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat forWorkspace()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat global()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereWorkspaceId($value)
 */
	class Chat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChatParticipant
 *
 * @property int $id
 * @property int $chat_id
 * @property int $user_id
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Chat $chat
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ChatParticipant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatParticipant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatParticipant query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatParticipant whereChatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatParticipant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatParticipant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatParticipant whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatParticipant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatParticipant whereUserId($value)
 */
	class ChatParticipant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactData
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string $subject
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactData whereUpdatedAt($value)
 */
	class ContactData extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contract
 *
 * @property int $id
 * @property string $title
 * @property string $start_date
 * @property float $cost
 * @property string $description
 * @property string $status
 * @property int $client_id
 * @property int $user_id
 * @property int|null $job_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $client
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\NewMilestoneRequest> $milestone_requests
 * @property-read int|null $milestone_requests_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ContractMilestone> $milestones
 * @property-read int|null $milestones_count
 * @property-read \App\Models\User $provider
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Workspace> $workspaces
 * @property-read int|null $workspaces_count
 * @method static \Illuminate\Database\Eloquent\Builder|Contract newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereUserId($value)
 */
	class Contract extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContractFile
 *
 * @property int $id
 * @property string $file
 * @property int $contract_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContractFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractFile whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractFile whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractFile whereUpdatedAt($value)
 */
	class ContractFile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContractMilestone
 *
 * @property int $id
 * @property string $title
 * @property float $cost
 * @property string $description
 * @property string $status
 * @property string|null $escrow_fund_added_time
 * @property int|null $razorpay_order_id
 * @property string|null $escrow_fund_released_time
 * @property string|null $due_date
 * @property string|null $completed_at
 * @property int $contract_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Contract $contract
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MilestoneWork> $works
 * @property-read int|null $works_count
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereEscrowFundAddedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereEscrowFundReleasedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereRazorpayOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractMilestone whereUpdatedAt($value)
 */
	class ContractMilestone extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExperienceLevel
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceLevel active()
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceLevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceLevel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceLevel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceLevel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceLevel whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceLevel whereUpdatedAt($value)
 */
	class ExperienceLevel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Industry
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories
 * @property-read int|null $categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Industry active()
 * @method static \Illuminate\Database\Eloquent\Builder|Industry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Industry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Industry query()
 * @method static \Illuminate\Database\Eloquent\Builder|Industry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Industry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Industry whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Industry whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Industry whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Industry whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Industry whereUpdatedAt($value)
 */
	class Industry extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Job
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string|null $banner
 * @property string $payment_type
 * @property float|null $work_hours
 * @property string $size
 * @property string $visibility
 * @property string $country
 * @property float $rate_from
 * @property float $rate_to
 * @property int|null $experience_level_id
 * @property int|null $sub_category_id
 * @property string|null $metadata
 * @property int $work_length_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property string $status
 * @property-read \App\Models\JobApplication|null $application
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobApplication> $applications
 * @property-read int|null $applications_count
 * @property-read \App\Models\User $client
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Skill> $direct_skill
 * @property-read int|null $direct_skill_count
 * @property-read \App\Models\ExperienceLevel|null $experience
 * @property-read mixed $short_desc
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobApplication> $hired_candidates
 * @property-read int|null $hired_candidates_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobInvitation> $invites
 * @property-read int|null $invites_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Like> $likes
 * @property-read int|null $likes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobResponsibility> $responsibilities
 * @property-read int|null $responsibilities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobSkill> $skills
 * @property-read int|null $skills_count
 * @property-read \App\Models\SubCategory|null $sub_category
 * @property-read \App\Models\WorkLength $work_length
 * @method static \Illuminate\Database\Eloquent\Builder|Job active()
 * @method static \Illuminate\Database\Eloquent\Builder|Job isPublic()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereExperienceLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereMetadata($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereRateFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereRateTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereVisibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereWorkHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereWorkLengthId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job withLikedByUser()
 */
	class Job extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobApplication
 *
 * @property int $id
 * @property int $job_id
 * @property int $user_id
 * @property float $bid_price
 * @property string|null $document
 * @property string $work_letter
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Job $job
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Usage> $usages
 * @property-read int|null $usages_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereBidPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereWorkLetter($value)
 */
	class JobApplication extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobInvitation
 *
 * @property int $id
 * @property int $job_id
 * @property int $user_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Job $job
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|JobInvitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobInvitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobInvitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobInvitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobInvitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobInvitation whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobInvitation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobInvitation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobInvitation whereUserId($value)
 */
	class JobInvitation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobResponsibility
 *
 * @property int $id
 * @property int $job_id
 * @property string $responsibility
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Job $job
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility whereResponsibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobResponsibility whereUpdatedAt($value)
 */
	class JobResponsibility extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobSkill
 *
 * @property int $id
 * @property int $job_id
 * @property int|null $skill_id
 * @property string|null $other_skill
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Skill|null $skill
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkill active()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkill query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkill whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkill whereOtherSkill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkill whereSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkill whereUpdatedAt($value)
 */
	class JobSkill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Like
 *
 * @property int $id
 * @property string $likeable_type
 * @property int $likeable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|Like newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Like newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Like query()
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereLikeableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereLikeableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereUserId($value)
 */
	class Like extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Message
 *
 * @property int $id
 * @property int $chat_id
 * @property int|null $sender_id
 * @property string|null $message
 * @property string|null $read_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $replied_to
 * @property-read \App\Models\Chat $chat
 * @property-read \App\Models\MessageContract|null $contract
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MessageMedia> $media
 * @property-read int|null $media_count
 * @property-read Message|null $replied
 * @property-read \App\Models\User|null $sender
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereChatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereRepliedTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MessageContract
 *
 * @property int $id
 * @property int $message_id
 * @property mixed $contract
 * @property string $status
 * @property int $send_by
 * @property int $send_to
 * @property string|null $reject_reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Message $message
 * @property-read \App\Models\User $receiver
 * @property-read \App\Models\User $sender
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract query()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract whereContract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract whereRejectReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract whereSendBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract whereSendTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageContract whereUpdatedAt($value)
 */
	class MessageContract extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MessageMedia
 *
 * @property int $id
 * @property int $message_id
 * @property string $type
 * @property string $file
 * @property string|null $thumbnail
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MessageMedia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageMedia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageMedia query()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageMedia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageMedia whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageMedia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageMedia whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageMedia whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageMedia whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageMedia whereUpdatedAt($value)
 */
	class MessageMedia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MilestoneRequest
 *
 * @property int $id
 * @property int $contract_id
 * @property mixed $milestone
 * @property string $status
 * @property int|null $added_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneRequest whereAddedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneRequest whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneRequest whereMilestone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneRequest whereUpdatedAt($value)
 */
	class MilestoneRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MilestoneWork
 *
 * @property int $id
 * @property string|null $file
 * @property string|null $remark
 * @property int $milestone_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ContractMilestone $milestone
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneWork newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneWork newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneWork query()
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneWork whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneWork whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneWork whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneWork whereMilestoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneWork whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneWork whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneWork whereUpdatedAt($value)
 */
	class MilestoneWork extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NewMilestoneRequest
 *
 * @property int $id
 * @property int $contract_id
 * @property mixed $milestone
 * @property int $requested_by
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|NewMilestoneRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewMilestoneRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewMilestoneRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|NewMilestoneRequest whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewMilestoneRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewMilestoneRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewMilestoneRequest whereMilestone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewMilestoneRequest whereRequestedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewMilestoneRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewMilestoneRequest whereUpdatedAt($value)
 */
	class NewMilestoneRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Package
 *
 * @property int $id
 * @property string $name
 * @property string|null $title
 * @property string|null $description
 * @property int|null $duration
 * @property float $price
 * @property float|null $discount
 * @property string $is_popular
 * @property string $is_subscription
 * @property string $for
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PackagePerk> $perks
 * @property-read int|null $perks_count
 * @method static \Illuminate\Database\Eloquent\Builder|Package active()
 * @method static \Illuminate\Database\Eloquent\Builder|Package monthly()
 * @method static \Illuminate\Database\Eloquent\Builder|Package newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package query()
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereIsPopular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereIsSubscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package yearly()
 */
	class Package extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PackageBalance
 *
 * @property int $id
 * @property int $user_id
 * @property int $commission
 * @property int $application_limit
 * @property int $connection_limit
 * @property int $active_workspace_limit how many active workspaces can be created by provider every month
 * @property float $workspace_space_limit in MB
 * @property int $service_limit how many services can be created by provider every month
 * @property mixed|null $client_benefits benefits by bringing clients
 * @property string|null $last_reset last reset date for re-filling the limits
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereActiveWorkspaceLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereApplicationLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereClientBenefits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereConnectionLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereLastReset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereServiceLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageBalance whereWorkspaceSpaceLimit($value)
 */
	class PackageBalance extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PackagePerk
 *
 * @property int $id
 * @property int $package_id
 * @property string $name
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Package $package
 * @method static \Illuminate\Database\Eloquent\Builder|PackagePerk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackagePerk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackagePerk query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackagePerk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackagePerk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackagePerk whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackagePerk wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackagePerk whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackagePerk whereValue($value)
 */
	class PackagePerk extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RazorpayOrder
 *
 * @property int $id
 * @property int $user_id
 * @property string $order_id
 * @property float $amount
 * @property int|null $discount
 * @property string $currency
 * @property string $status
 * @property string $for milestone, project, subscription, etc
 * @property mixed|null $for_data
 * @property string|null $transaction_id
 * @property int $attempts
 * @property string|null $resolved_by
 * @property string|null $resolved_at
 * @property string $payment_mode
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder failed()
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder paid()
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder pending()
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereAttempts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereForData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder wherePaymentMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereResolvedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereResolvedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RazorpayOrder whereUserId($value)
 */
	class RazorpayOrder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Skill
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Skill active()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereUpdatedAt($value)
 */
	class Skill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubCategory
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $image
 * @property int|null $category_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory active()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereUpdatedAt($value)
 */
	class SubCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Usage
 *
 * @property int $id
 * @property int $user_id
 * @property string $usageable_type
 * @property int $usageable_id
 * @property string|null $remark
 * @property int $usage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $usageable
 * @method static \Illuminate\Database\Eloquent\Builder|Usage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Usage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Usage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Usage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usage whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usage whereUsage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usage whereUsageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usage whereUsageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usage whereUserId($value)
 */
	class Usage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $uuid
 * @property string $name
 * @property string $email
 * @property string|null $images
 * @property string|null $rp_contact
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string $role
 * @property string $subscription_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $status
 * @property string|null $phone
 * @property string|null $gender
 * @property string|null $state
 * @property string|null $city
 * @property-read \App\Models\PackageBalance|null $balance
 * @property-read \App\Models\UserBank|null $bank
 * @property-read \App\Models\UserBusiness|null $business
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Chat> $chats
 * @property-read int|null $chats_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Contract> $client_contracts
 * @property-read int|null $client_contracts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ContractMilestone> $client_milestones
 * @property-read int|null $client_milestones_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Workspace> $client_workspace
 * @property-read int|null $client_workspace_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Skill> $direct_skills
 * @property-read int|null $direct_skills_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobApplication> $job_applications
 * @property-read int|null $job_applications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobInvitation> $job_invitations
 * @property-read int|null $job_invitations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserKyc> $kycs
 * @property-read int|null $kycs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Like> $liked_jobs
 * @property-read int|null $liked_jobs_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Job> $posted_jobs
 * @property-read int|null $posted_jobs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Contract> $provider_contracts
 * @property-read int|null $provider_contracts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ContractMilestone> $provider_milestones
 * @property-read int|null $provider_milestones_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Workspace> $provider_workspace
 * @property-read int|null $provider_workspace_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RazorpayOrder> $razorpay_orders
 * @property-read int|null $razorpay_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MessageContract> $received_message_contract
 * @property-read int|null $received_message_contract_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MessageContract> $sent_message_contract
 * @property-read int|null $sent_message_contract_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserService> $services
 * @property-read int|null $services_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserSkill> $skills
 * @property-read int|null $skills_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserSubscription> $subscriptions
 * @property-read int|null $subscriptions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Usage> $usages
 * @property-read int|null $usages_count
 * @method static \Illuminate\Database\Eloquent\Builder|User active()
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User hasLikedJob()
 * @method static \Illuminate\Database\Eloquent\Builder|User isProvider()
 * @method static \Illuminate\Database\Eloquent\Builder|User isSubscribed()
 * @method static \Illuminate\Database\Eloquent\Builder|User isUser()
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRpContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSubscriptionStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUuid($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserBank
 *
 * @property int $id
 * @property string $name
 * @property string $account_holder_name
 * @property string $account_number
 * @property string|null $rp_account_number
 * @property string $ifsc_code
 * @property string $branch
 * @property string $address
 * @property string $city
 * @property string $state
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereAccountHolderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereIfscCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereRpAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBank whereUserId($value)
 */
	class UserBank extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserBusiness
 *
 * @property int $id
 * @property string $name
 * @property string $cin
 * @property string $address
 * @property string|null $gstin
 * @property string $incorporation_certificate
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness whereCin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness whereGstin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness whereIncorporationCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBusiness whereUserId($value)
 */
	class UserBusiness extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserKyc
 *
 * @property int $id
 * @property string $name
 * @property string $file
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserKyc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserKyc newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserKyc query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserKyc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserKyc whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserKyc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserKyc whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserKyc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserKyc whereUserId($value)
 */
	class UserKyc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserService
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property float $price
 * @property int $user_id
 * @property int $category_id
 * @property int $sub_category_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $metadata
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserServiceImage> $images
 * @property-read int|null $images_count
 * @property-read \App\Models\SubCategory $sub_category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Usage> $usages
 * @property-read int|null $usages_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserService active()
 * @method static \Illuminate\Database\Eloquent\Builder|UserService category($category)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserService price($price)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService priceRange($priceRange)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserService search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService subCategory($subCategory)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereMetadata($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserService whereUserId($value)
 */
	class UserService extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserServiceImage
 *
 * @property int $id
 * @property int $user_service_id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\UserService $service
 * @method static \Illuminate\Database\Eloquent\Builder|UserServiceImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserServiceImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserServiceImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserServiceImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserServiceImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserServiceImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserServiceImage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserServiceImage whereUserServiceId($value)
 */
	class UserServiceImage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserSkill
 *
 * @property int $id
 * @property int $user_id
 * @property int $skill_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Skill $skill
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill whereSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill whereUserId($value)
 */
	class UserSkill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserSubscription
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $package_id
 * @property int $razorpay_order_id
 * @property mixed $package_details
 * @property string $start_date
 * @property string $end_date
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\RazorpayOrder $order
 * @property-read \App\Models\Package|null $package
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription wherePackageDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription whereRazorpayOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription whereUserId($value)
 */
	class UserSubscription extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Wishlist
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string|null $from
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $expertise
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist query()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereExpertise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereUpdatedAt($value)
 */
	class Wishlist extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WorkLength
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WorkLength active()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkLength newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkLength newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkLength query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkLength whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkLength whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkLength whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkLength whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkLength whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkLength whereUpdatedAt($value)
 */
	class WorkLength extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Workspace
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property float $space_limit in MB
 * @property float $remaining_space in MB
 * @property float $commission
 * @property int $client_id
 * @property int $user_id
 * @property int $contract_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Chat|null $chat
 * @property-read \App\Models\Contract $contract
 * @property-read \App\Models\User $owner
 * @property-read \App\Models\User $provider
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Usage> $usages
 * @property-read int|null $usages_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace active()
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace query()
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereRemainingSpace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereSpaceLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workspace whereUserId($value)
 */
	class Workspace extends \Eloquent {}
}

