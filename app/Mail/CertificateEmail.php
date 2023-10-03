<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Certificate\DomesticElectrical\Eicr;
use App\Certificate\DomesticGas\WarningNoticeGas;
use App\Certificate\DomesticElectrical\PortableApplianceTesting;
use App\Certificate\DomesticGas\LandlordHomeownerGasSafetyRecord;
use App\Certificate\DomesticElectrical\ElectricalDangerNotification;
use App\Certificate\DomesticElectrical\DomesticElectricalInstallationCertificate;
use App\Certificate\DomesticElectrical\MinorElectrical;
use App\Certificate\DomesticGas\GasServiceBreakdown;
use App\Certificate\DomesticGas\ServiceMaintanceRecord;
use App\Certificate\DomesticGas\GasTestingPurging;
use App\Certificate\CommercialGas\LeisureIndustryGasSafetyRecord;
use App\Certificate\DomesticElectrical\ElectricalIsolationForm;

class CertificateEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    protected $certificate;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$certificate)
    {
        $this->user = $user;
        $this->certificate = $certificate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = env('MAIL_FROM_ADDRESS');
        $name = '360 Connect';
        $subject = 'Certificate Email';
        $certificate = $this->certificate;

        $file_name = $certificate->form->file_name;
        if ($file_name == 'Domestic_Electrical_installation_Condition_report') {
            $file =  Eicr::stringCode($certificate);
        } elseif ($file_name == 'Landlord_Homeowner_Gas_Safety_Record') {
            $file =  LandlordHomeownerGasSafetyRecord::stringCode($certificate);
        } elseif ($file_name == 'Warning_Notice') {
            $file = WarningNoticeGas::stringCode($certificate);
        } elseif ($file_name == 'Portable_Appliance_Testing') {
            $file = PortableApplianceTesting::stringCode($certificate);
        } elseif ($file_name == 'Electrical_Danger_Notification') {
            $file = ElectricalDangerNotification::stringCode($certificate);
        } elseif ($file_name == 'Domestic_Electrical_Installation_Certificate') {
            $file = DomesticElectricalInstallationCertificate::stringCode($certificate);
        }elseif ($file_name == 'Minor_Electrical') {
            $file = MinorElectrical::stringCode($certificate);
        }elseif ($file_name == 'Gas_Service_Breakdown') {
            $file = GasServiceBreakdown::stringCode($certificate);
        }elseif ($file_name == 'Service_Maintance_Record') {
            $file = ServiceMaintanceRecord::stringCode($certificate);
        }elseif ($file_name == 'Gas_Testing_Purging') {
            $file =GasTestingPurging::stringCode($certificate);
        }elseif ($file_name == 'Landlord_Gas_Safety_record_for_the_Leisure_Industry') {
            $file = LeisureIndustryGasSafetyRecord::stringCode($certificate);
        }elseif ($file_name == 'Electrical_Isolation_Form') {
            $file = ElectricalIsolationForm::stringCode($certificate);
        }


        $fileName = "C$certificate->id.pdf";
        return $this->to($this->user->email)->subject($subject)
            ->from($address, $name)
            ->view('emails.certificate-email.index', [
                'user' => $this->user,
                'certificate' => $this->certificate
            ])->attachData($file, $fileName, [
                'mime' => 'application/pdf',
            ]);
    }
}
